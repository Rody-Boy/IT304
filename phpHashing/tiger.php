<?php
    $word="i love dogs and hate cats";
    $convert=hash('tiger192,4', $word);

    echo $convert;

    $converted="99a22bb4d329488b570196c23beaa7e041f26eb8fba3c46b";

    if ($convert==$converted) {
        echo "\nsuccess";
    }else {
        echo "\nfailed";
    }
?>