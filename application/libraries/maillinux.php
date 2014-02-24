<?php

define('SMTP_INCLUDED', 1);

class Maillinux {
    function server_parse($socket, $response) {
        $server_response = '';
        while (substr($server_response, 3, 1) != ' ') {
            if (!( $server_response = fgets($socket, 256) )) {
                echo "Couldn't get mail server response codes";
            }
        }
        if (!( substr($server_response, 0, 3) == $response )) {
            echo "Ran into problems sending Mail. Response: $server_response";
        }
    }

    function smtpmail($mail_to, $subject, $message, $headers = '', $smtp_host, $smtp_username, $smtp_password, $admin_email) {

        $message = preg_replace("/(?<!\r)\n/si", "\r\n", $message);
        if ($headers != "") {
            if (is_array($headers)) {
                if (sizeof($headers) > 1) {
                    $headers = join("\r\n", $headers);
                } else {
                    $headers = $headers[0];
                }
            }
            $headers = chop($headers);

            $headers = preg_replace("/(?<!\r)\n/si", "\r\n", $headers);

            $header_array = explode("\r\n", $headers);
            @reset($header_array);
            $headers = "";
            $cc = '';
            $bcc = '';
            while (list(, $header) = each($header_array)) {
                if (preg_match("/^cc:/si", $header)) {
                    $cc = preg_replace("/^cc:(.*)/si", "\\1", $header);
                } else if (preg_match("/^bcc:/si", $header)) {
                    $bcc = preg_replace("/^bcc:(.*)/si", "\\1", $header);
                    $header = "";
                }
                $headers .= $header . "\r\n";
            }
            $headers = chop($headers);
            $cc = explode(",", $cc);
            $bcc = explode(",", $bcc);
        }


        if (trim($mail_to) == "") {
            exit();
        }
        if (trim($subject) == "") {
            die("No email Subject specified");
        }

        $mail_to_array = explode(",", $mail_to);

        if (!$socket = fsockopen($smtp_host, 25, $errno, $errstr, 20)) {
            die("Could not connect to smtp host : $errno : $errstr");
        }
        $this->server_parse($socket, "220");

        if (!empty($smtp_username) && !empty($smtp_password)) {

            fputs($socket, "EHLO " . $smtp_host . "\r\n");
             $this->server_parse($socket, "250");

            fputs($socket, "AUTH LOGIN\r\n");
            $this->server_parse($socket, "334");
            fputs($socket, base64_encode($smtp_username) . "\r\n");
             $this->server_parse($socket, "334");
            fputs($socket, base64_encode($smtp_password) . "\r\n");
            $this->server_parse($socket, "235");
        } else {
// Send the RFC821 specified HELO.
            fputs($socket, "HELO " . $smtp_host . "\r\n");
             $this->server_parse($socket, "250");
        }

// From this point onward most server response codes should be 250
// Specify who the mail is from....
        fputs($socket, "MAIL FROM: <" . $admin_email . ">\r\n");
         $this->server_parse($socket, "250");

// Specify each user to send to and build to header.
        $to_header = "To: ";
        reset($mail_to_array);
        while (list(, $mail_to_address ) = each($mail_to_array)) {
//
// Add an additional bit of error checking to the To field.
//
            $mail_to_address = trim($mail_to_address);
            if (preg_match('/[^ ]+\@[^ ]+/', $mail_to_address)) {
                fputs($socket, "RCPT TO: <$mail_to_address>\r\n");
                 $this->server_parse($socket, "250");
            }
            $to_header .= "<$mail_to_address>, ";
        }
// Ok now do the CC and BCC fields...
        @reset($bcc);
        while (list(, $bcc_address ) = each($bcc)) {
//
// Add an additional bit of error checking to bcc header...
//
            $bcc_address = trim($bcc_address);
            if (preg_match('/[^ ]+\@[^ ]+/', $bcc_address)) {
                fputs($socket, "RCPT TO: <$bcc_address>\r\n");
                 $this->server_parse($socket, "250");
            }
        }
        @reset($cc);
        while (list(, $cc_address ) = each($cc)) {
//
// Add an additional bit of error checking to cc header
//
            $cc_address = trim($cc_address);
            if (preg_match('/[^ ]+\@[^ ]+/', $cc_address)) {
                fputs($socket, "RCPT TO: <$cc_address>\r\n");
                 $this->server_parse($socket, "250");
            }
        }
// Ok now we tell the server we are ready to start sending data
        fputs($socket, "DATA\r\n");

// This is the last response code we look for until the end of the message.
         $this->server_parse($socket, "354");

// Send the Subject Line...
        fputs($socket, "Subject: $subject\r\n");

// Now the To Header.
        fputs($socket, "$to_header\r\n");
        fputs($socket, "$headers\r\n\r\n");

// Ok now we are ready for the message...
        fputs($socket, "$message\r\n");
        fputs($socket, ".\r\n");
        $this->server_parse($socket, "250");
        fputs($socket, "QUIT\r\n");
        fclose($socket);
        return TRUE;
    }
    function SendMail($frommail, $tomail, $subject, $message, $fromfullname = "NINHBINH COOP") {
        $from = $fromfullname . " <" . $frommail . ">";
        $headers = "Return-Path: " . $fromfullname . " <" . $frommail . ">\r\n";
        $headers.="From: $from\nX-Mailer: " . $fromfullname . "\r\n";
        $headers .="Mime-Version: 1.0\r\n";
        $headers .="Content-type: text/html; charset=utf-8\r\n";
        $smtp_host = 'mail.ninhbinhcoop.com'; //Dia chi mail server
        $admin_email = 'no-reply@ninhbinhcoop.com'; //User duoc khai bao tren mail server
        $smtp_username = 'no-reply@ninhbinhcoop.com'; //User duoc khai bao tren mail server
        $smtp_password = 'no-reply'; //Pass cua email nay
        $result = $this->smtpmail($tomail, $subject, $message, $headers, $smtp_host, $smtp_username, $smtp_password, $admin_email);
    }
}
?>
