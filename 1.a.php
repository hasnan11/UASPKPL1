<?php
class IsiPulsa
{
    function nomorHp($nomorHp){
        if ($nomorHp == '081343373926') {
            return TRUE;
        }
    }
    
    function metodePembayaran($metodePembayaran){
        if ($metodePembayaran == 'cash') {
            return TRUE;
        }
    }

    function eksekusi($nomorHp, $metodePembayaran){
        if ($this->nomorHp($nomorHp) == TRUE) {
            if ($this->metodePembayaran($metodePembayaran) == TRUE){
                return 'isi pulsa berhasil';
            } else {
                return 'pembayaran gagal';
            }
        }else {
            return 'nomor hp salah';
        }
    }



}

$topUp = new IsiPulsa;
$cek = $topUp->eksekusi('081343373926', 'cash');
echo $cek;