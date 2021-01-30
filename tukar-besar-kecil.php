<?php
    function tukar_besar_kecil($string){
        //kode di sini
        $string_now="";
        for ($z=0;$z<strlen($string);$z++){
            $now = ord($string[$z]);
            if ($now>=65 && $now<=90){
                $string_now=$string_now.chr($now+32);
            }
            else if($now>=97 && $now<=122){
                $string_now=$string_now.strtoupper($string[$z]);
            }
            else{
                $string_now=$string_now.$string[$z];
            }
        }
        return $string_now."<br />";
    }

    // TEST CASES
    echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
    echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
    echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
    echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
    echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
?>
