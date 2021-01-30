<?php
    function skor_terbesar($arr){
        //kode di sini
        $max_skor = array();
        for ($z=0;$z<count($arr);$z++){
            $max_skor[$arr[$z]['kelas']]=$arr[$z];
        }
        return $max_skor;
    }

    function testing($arr){
        $max_skor = array();
        $jumlah = array();
        $total=1;
        for ($a=0;$a<count($arr)-1;$a++){
            for ($b=1;$b<count($arr);$b++){
                if ($arr[$a]>$arr[$b]){
                    $z=$arr[$a];
                    $arr[$a]=$arr[$b];
                    $arr[$b]=$z;
                }
            }

        }
        for ($x=0;$x<count($arr)-1;$x++){
            $jumlah[$arr[$x]['kelas']]=$arr[$x]['kelas'];
        }
        for ($z=0;$z<count($jumlah);$z++){
            $max_skor[$arr[$z]['kelas']]=$arr[$z];
        }
        return $max_skor;
    }
    // TEST CASES
    $skor = [
        [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
        ],
        [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
        ],
        [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
        ],
        [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
        ],
        [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
        ],
    ];
    print_r(testing($skor));
    /* OUTPUT
    Array (
    [Laravel] => Array
    (
    [nama] => Aghnat
    [kelas] => Laravel
    [nilai] => 90
    )
    [React Native] => Array
    (
    [nama] => Regi
    [kelas] => React Native
    [nilai] => 86
    )
    [React JS] => Array
    (
    [nama] => Indra
    [kelas] => React JS
    [nilai] => 85
    )
    )
    */
?>
