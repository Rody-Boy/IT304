<?php
    $word="i love dogs and hate cats";
    $convert=hash('ripemd160', $word);

    echo $convert;

    $converted="741fb98e7eafc564286ac7dd5cbd2491";

    if ($convert==$converted) {
        echo "\nsuccess";
    }else {
        echo "\nfailed";
    }
?>