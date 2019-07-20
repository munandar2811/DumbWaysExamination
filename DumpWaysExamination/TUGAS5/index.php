<?php

$jumlah=0;
    function drawLine($jumlah){
        for ($i=1; $i<=$jumlah; $i++){
            echo "<br>";
            for($j=1; $j<=$jumlah; $j++){
                if($i==$j){
                    echo "*";
                }else{
                    echo "+";
                }
            }
        }
    }

    drawLine(8);
?>