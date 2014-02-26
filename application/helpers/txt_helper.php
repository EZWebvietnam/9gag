<?php
if (!function_exists("removesign")) {

    function removesign($str)
    {
        $coDau = array(
            "à",
            "á",
            "ạ",
            "ả",
            "ã",
            "â",
            "ầ",
            "ấ",
            "ậ",
            "ẩ",
            "ẫ",
            "ă",
            "ằ",
            "ắ",
            "ặ",
            "ẳ",
            "ẵ",
            "è",
            "é",
            "ẹ",
            "ẻ",
            "ẽ",
            "ê",
            "ề",
            "ế",
            "ệ",
            "ể",
            "ễ",
            "ì",
            "í",
            "ị",
            "ỉ",
            "ĩ",
            "ò",
            "ó",
            "ọ",
            "ỏ",
            "õ",
            "ô",
            "ồ",
            "ố",
            "ộ",
            "ổ",
            "ỗ",
            "ơ",
            "ờ",
            "ớ",
            "ợ",
            "ở",
            "ỡ",
            "ù",
            "ú",
            "ụ",
            "ủ",
            "ũ",
            "ư",
            "ừ",
            "ứ",
            "ự",
            "ử",
            "ữ",
            "ỳ",
            "ý",
            "ỵ",
            "ỷ",
            "ỹ",
            "đ",
            "À",
            "Á",
            "Ạ",
            "Ả",
            "Ã",
            "Â",
            "Ầ",
            "Ấ",
            "Ậ",
            "Ẩ",
            "Ẫ",
            "Ă",
            "Ằ",
            "Ắ",
            "Ặ",
            "Ẳ",
            "Ẵ",
            "È",
            "É",
            "Ẹ",
            "Ẻ",
            "Ẽ",
            "Ê",
            "Ề",
            "Ế",
            "Ệ",
            "Ể",
            "Ễ",
            "Ì",
            "Í",
            "Ị",
            "Ỉ",
            "Ĩ",
            "Ò",
            "Ó",
            "Ọ",
            "Ỏ",
            "Õ",
            "Ô",
            "Ồ",
            "Ố",
            "Ộ",
            "Ổ",
            "Ỗ",
            "Ơ",
            "Ờ",
            "Ớ",
            "Ợ",
            "Ở",
            "Ỡ",
            "Ù",
            "Ú",
            "Ụ",
            "Ủ",
            "Ũ",
            "Ư",
            "Ừ",
            "Ứ",
            "Ự",
            "Ử",
            "Ữ",
            "Ỳ",
            "Ý",
            "Ỵ",
            "Ỷ",
            "Ỹ",
            "Đ",
            "ê",
            "ù",
            "à");
        $khongDau = array(
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "a",
            "e",
            "e",
            "e",
            "e",
            "e",
            "e",
            "e",
            "e",
            "e",
            "e",
            "e",
            "i",
            "i",
            "i",
            "i",
            "i",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "o",
            "u",
            "u",
            "u",
            "u",
            "u",
            "u",
            "u",
            "u",
            "u",
            "u",
            "u",
            "y",
            "y",
            "y",
            "y",
            "y",
            "d",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "A",
            "E",
            "E",
            "E",
            "E",
            "E",
            "E",
            "E",
            "E",
            "E",
            "E",
            "E",
            "I",
            "I",
            "I",
            "I",
            "I",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "O",
            "U",
            "U",
            "U",
            "U",
            "U",
            "U",
            "U",
            "U",
            "U",
            "U",
            "U",
            "Y",
            "Y",
            "Y",
            "Y",
            "Y",
            "D",
            "e",
            "u",
            "a");
        return str_replace($coDau, $khongDau, $str);
    }
}
if (!function_exists('sub_string')) {
    function sub_string($chuoi, $gioihan)
    {

        // nếu độ dài chuỗi nhỏ hơn hay bằng vị trí cắt
        // thì không thay đổi chuỗi ban đầu
        if (strlen($chuoi) <= $gioihan) {
            return $chuoi;
        } else {

            if (strpos($chuoi, " ", $gioihan) > $gioihan) {
                $new_gioihan = strpos($chuoi, " ", $gioihan);
                $new_chuoi = substr($chuoi, 0, $new_gioihan) . "...";
                return $new_chuoi;
            }
            $new_chuoi = substr($chuoi, 0, $gioihan) . "...";
            return $new_chuoi;
        }
    }

}
if (!function_exists("loaibohtmltrongvanban")) {
    function loaibohtmltrongvanban($html, $exceptions = null)
    {
        if (is_array($exceptions) && !empty($exceptions)) {
            foreach ($exceptions as $exception) {
                $openTagPattern = '/<(' . $exception . ')(\s.*?)?>/msi';
                $closeTagPattern = '/<\/(' . $exception . ')>/msi';
                $html = preg_replace(array($openTagPattern, $closeTagPattern), array('||l|\1\2|r||',
                        '||l|/\1|r||'), $html);
            }
        }
        $html = preg_replace('/<.*?>/msi', '', $html);
        if (is_array($exceptions)) {
            $html = str_replace('||l|', '<', $html);
            $html = str_replace('|r||', '>', $html);
        }
        return $html; // Code in Vn4rum.net - Thế giới học tập
    }
}
if (!function_exists('columnSort_desc')) {
    function columnSort_desc($unsorted, $column)
    {
        $sorted = $unsorted;
        for ($i = 0; $i < sizeof($sorted) - 1; $i++) {
            for ($j = 0; $j < sizeof($sorted) - 1 - $i; $j++)
                if ($sorted[$j][$column] < $sorted[$j + 1][$column]) {
                    $tmp = $sorted[$j];
                    $sorted[$j] = $sorted[$j + 1];
                    $sorted[$j + 1] = $tmp;
                }
        }
        return $sorted;
    }
    if (!function_exists('compare_date')) {
        function compare_date($dateBefore)
        {
            if ($dateBefore != '') {
                $date = date('d/m/Y');
                $pardate = explode('/',$date);
                $date1 = date("d/m/y", mktime(0, 0, 0, $pardate[1], $pardate[0], $pardate[2]));
                $date3 = $dateBefore;
                $parts = explode('/', $date3);
                $date4 = date("d/m/y", mktime(0, 0, 0, $parts[1], $parts[0], $parts[2]));
                if (($date4 < $date1) || ($date4 == $date1)) {
                    return 0;
                } else {
                    return 1;
                }
                
            } else {
                return 0;
            }
        }
    }
    if(!function_exists('format_money'))
    {
        function format_money($n)
        {
             // first strip any formatting;
        $n = (0+str_replace(",","",$n));
        
        // is this a number?
        if(!is_numeric($n)) return false;
        
        // now filter it;
      
        
        return number_format($n);
        }
    }
    if(!function_exists('rand_string'))
    {
        function rand_string( $length ) {
            $str='';
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen( $chars );
        for( $i = 0; $i < $length; $i++ ) {
        $str .= $chars[ rand( 0, $size - 1 ) ];
         }
        return $str;
}
    }
    if(!function_exists('bd_nice_number'))
    {
        function bd_nice_number($n) {
        // first strip any formatting;
        $n = (0+str_replace(",","",$n));
        
        // is this a number?
        if(!is_numeric($n)) return false;
        
        // now filter it;
        if($n>1000000000000) return round(($n/1000000000000),1).' tỉ';
        else if($n>1000000000) return round(($n/1000000000),1).' trăm triệu';
        else if($n>1000000) return round(($n/1000000),1).' triệu';
        else if($n>1000) return round(($n/1000),1).' ngàn';
        
        return number_format($n);
        }
    }
    if(!function_exists('full_url_'))
    {
        function full_url_($s)
        {
            $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
            $sp = strtolower($s['SERVER_PROTOCOL']);
            $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
            $port = $s['SERVER_PORT'];
            $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
            $host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : $s['SERVER_NAME'];
            return $protocol . '://' . $host . $port . $s['REQUEST_URI'];
        }
    }
    if(!function_exists('time_diff_string'))
    {
        function time_diff_string($from, $to, $full = false) {
        $from = new DateTime($from);
        $to = new DateTime($to);
        $diff = $to->diff($from);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . '' : '';
}
    }
}
?>
