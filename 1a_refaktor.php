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



    function eksekusi($nomorHp, $metodePembayaran)

    {
        if ($this->nomorHp($nomorHp) == false) {
            return 'isi pulsa gagal, Nomor Tidak Terdaftar';
        }
        if ($this->metodePembayaran($metodePembayaran) == false) {
            return 'isi pulsa gagal';
        }
        return 'isi pulsa Berhasil';
    }
}

$topUp = new IsiPulsa;
$cek = $topUp->eksekusi('081343373926', 'cash');
echo $cek;