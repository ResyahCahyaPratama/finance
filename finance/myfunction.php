<?php
function displayNamaGelar($nama,$g_depan='',$g_belakang=''){
    if(strpos($g_belakang,",") === false)
    {
        $g_belakang = ", ".$g_belakang;
    }
    else
    {
        $g_belakang = " ".$g_belakang;
    }
    return trim($g_depan." ".$nama.$g_belakang);
}