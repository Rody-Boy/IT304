<?php
    $word="i love dogs and hate cats";
    $convert=hash('sha256', $word);

    echo $convert;

    $converted="8e97267b2369b7ac9cece360a8971d5804615a846991de4433b3e62ce4282f72";

    if ($convert==$converted) {
        echo "\nsuccess";
    }else {
        echo "\nfailed";
    }
?>