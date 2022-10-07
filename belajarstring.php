<?php

//awalan
$nama = "Rifki nugraha";
echo $nama;
echo "<br />";

//strlen untuk menghitung berapa banyak karakter
echo strlen($nama);
echo "<br />";

//str_word_count menghitung banyak kata
echo str_word_count($nama);
echo "<br />";

//strrev revers kata
echo strrev($nama);
echo "<br />";

//strpos hitung karakter dari nol
echo strpos($nama, "nugraha");
echo "<br />";

//str_replace mengganti nama
echo str_replace("nugraha", "iki", $nama);
?>