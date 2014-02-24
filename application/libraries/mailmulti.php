<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Mailmulti {
    var $mail;
    public function __construct()
    {
        require_once('PHPMailer/class.phpmailer.php');
        // the true param means it will throw exceptions on errors, which we need to catch
        $this->mail = new PHPMailer(true);
        $this->mail->IsSMTP(); // telling the class to use SMTP
        $this->mail->CharSet = "utf-8"; 
        $this->mail->IsHTML(true);
        $this->mail->SMTPDebug  = 0;                     // enables SMTP debug information
        $this->mail->SMTPAuth   = true;                  // enable SMTP authentication
        $this->mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $this->mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $this->mail->Port       = 465;                   // set the SMTP port for the GMAIL server
        $this->mail->Username   = "hutechdevloperclub@gmail.com";// GMAIL username
        $this->mail->Password   = "hutechdevloperclub123";       // GMAIL password
        $this->mail->AddReplyTo('hutechdevloperclub@gmail.com', 'HUTECH DEVELOPERS CLUB');
        $this->mail->SetFrom('hutechdevloperclub@gmail.com', 'HUTECH DEVELOPERS CLUB');
    }
 
    public function sendmail(array $to, $to_name, $subject, $body){
        try{
            foreach($to as $key => $val){ $this->mail->AddAddress($val , $key); }
            //$this->mail->AddAddress($to, $to_name);
 
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
 
            $this->mail->Send();
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }
    }
}
?>