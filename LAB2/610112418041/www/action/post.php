<?php

$sport= $_POST['sl_sport']?$_POST['sl_sport']:$_GET['getSport'];

cal_sport($sport);

function cal_sport($sport){
    switch ($sport){
        case "1" : 
            $sport = "Football";
            break;
            echo "sport"
        case "2" : 
            $sport = "Tenis";
            break;
            echo "sport"
        default:
            $sport = "out of type.";

    }
    echo $sport;
};
?>