<?php
    function tentukan_deret_aritmatika($arr) {
        // kode di sini
        $bool = "true";
        $arit = $arr[1]-$arr[0];
        for ($z=1;$z<count($arr)-1;$z++){
            if($arit!=($arr[$z+1]-$arr[$z])){
                $bool = "false";
                break;
            }
        }
        return $bool."<br />";
    }

    // TEST CASES
    echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
    echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
    echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
    echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
    echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>
