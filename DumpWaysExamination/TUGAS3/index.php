<?php
    $tanggalMulai="2018-11-01";
    $tanggalBerakhir="2018-11-05";


    function betWeenDays($tanggalMulai, $tanggalAkhir){
        $bilahMulai=explode("-",$tanggalMulai);
        $bilahAkhir=explode("-",$tanggalAkhir);
    
        for($tahun=$bilahMulai[0]; $tahun<=$bilahAkhir[0]; $tahun++){
            
            for($bulan=$bilahMulai[1]; $bulan<=$bilahAkhir[1]; $bulan++){
                for($tanggal=$bilahMulai[2]; $tanggal<=$bilahAkhir[2]; $tanggal++){
                    $cetak= array($tahun,$bulan,$tanggal );
                    echo implode("-",$cetak);
                    
                }
            }
        }
    }

    betWeenDays("2018-11-01","2018-11-05" );

?>