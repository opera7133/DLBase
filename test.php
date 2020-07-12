<?php

$file = "file.txt";
$filept = pathinfo($file);

if ($filept['extension'] = "txt") {
    echo "テキストファイル";
}