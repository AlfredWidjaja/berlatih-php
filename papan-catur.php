<?php

    function papan_catur($angka) {
        // tulis kode di sini
        $papan="";
        for ($a=0;$a<$angka;$a++){
            if ($a%2===0){
                for ($b=0; $b<$angka; $b++){
                    $papan=$papan."# &nbsp";
                }
            }
            else{
                for ($b=0; $b<$angka-1; $b++){
                    $papan=$papan."&nbsp #";
                }
            }
            $papan=$papan."<br />";
        }
        return $papan."<br />";
    }

    // TEST CASES
    echo papan_catur(4);
    /*
    # # # #
    # # #
    # # # #
    # # #
    */

    echo papan_catur(8);
    /*
    # # # # # # # #
    # # # # # # #
    # # # # # # # #
    # # # # # # #
    # # # # # # # #
    # # # # # # #
    # # # # # # # #
    # # # # # # #
    */

    echo papan_catur(5)
    /*
    # # # # #
    # # # #
    # # # # #
    # # # #
    # # # # #
    */
?>
