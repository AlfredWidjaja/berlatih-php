<?php
    function pasangan_terbesar($angka){
        // kode di sini
        $string = "$angka";
        $max = 0;
        for ($a=0;$a<strlen($string)-1;$a++){
            $now = (int)$string[$a].$string[$a+1];
            if ($now>$max){
                $max=$now;
            }
        }
        return $max."<br />";
    }

    // TEST CASES
    echo pasangan_terbesar(641573); // 73
    echo pasangan_terbesar(12783456); // 83
    echo pasangan_terbesar(910233); // 91
    echo pasangan_terbesar(71856421); // 85
    echo pasangan_terbesar(79918293); // 99

?>
