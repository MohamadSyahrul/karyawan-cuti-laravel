<?php


/** Function Ubah format waktu */
function dateFormat($tanggal){
    $date = strtotime($tanggal);
    $date_format = date('Y-m-d',$date);

    return $date_format;
}