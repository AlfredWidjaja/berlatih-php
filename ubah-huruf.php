<?php
    function ubah_huruf($string){
        //kode di sini
        $string_now="";
        for ($z=0;$z<strlen($string);$z++){
            $string_now=$string_now.chr(ord($string[$z])+1);
        }
        return $string_now. "<br />";
    }

    // TEST CASES
    echo ubah_huruf('wow'); // xpx
    echo ubah_huruf('developer'); // efwfmpqfs
    echo ubah_huruf('laravel'); // mbsbwfm
    echo ubah_huruf('keren'); // lfsfo
    echo ubah_huruf('semangat'); // tfnbohbu
?>
