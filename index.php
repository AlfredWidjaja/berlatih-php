<?php
    require ('animal.php');
    /* Release 0 */
    echo "<h2> Release 0 </h2>";
    $sheep = new Animal("shaun");

    $sheep->get_name();
    $sheep->get_legs();
    $sheep->get_cold_blooded();

    /* Release 1 */
    echo "<h2> Release 1 </h2>";
    echo "Menampilkan keseluruhan data class Ape dan Frog <br />";

    echo "<h3> Class Ape </h3>";
    $sungokong = new Ape("kera sakti");

    $sungokong->get_name();
    $sungokong->get_legs();
    $sungokong->get_cold_blooded();
    $sungokong->yell();

    echo "<h3> Class Frog </h3>";
    $kodok = new Frog("buduk");

    $kodok->get_name();
    $kodok->get_legs();
    $kodok->get_cold_blooded();
    $kodok->jump();
?>
