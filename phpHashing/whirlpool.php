<?php
    $word="i love dogs and hate cats";
    $convert=hash('whirlpool', $word);

    echo $convert;

    $converted="d3e5fd1608aa181fc528285dbafdc7879a3206becd1d6b792b0a8cf77d1b36a939580f04120d8c040f118481914b99e652b43330adcda3f14a1923e47f3a7faf";

    if ($convert==$converted) {
        echo "\nsuccess";
    }else {
        echo "\nfailed";
    }
?>