<?php

interface KubusInterface
{
    public function hitungKubus($sisi);
}

class Luas implements KubusInterface
{
    public function hitungKubus($sisi)
    {
        $ENAM = 6;
        $hasil = $ENAM * ($sisi * $sisi);
        echo "Luas Kubus adalah : ". $hasil;
    }
}

class Volume implements KubusInterface
{
    public function hitungKubus($sisi)
    {
        $hasil = $sisi * $sisi * $sisi;
        echo "Volume Kubus adalah : ". $hasil;
    }
}


class Kubus
{
    public static function pilih($pilih)
    {
        switch ($pilih) {
            case 'luas':
                return new Luas;
                break;
            case 'volume':
                return new Volume;
                break;
            default:
                return FALSE;
        }
    }
}

$sisi = 6;
Kubus::pilih('luas')->hitungKubus($sisi);
echo '<br>';
Kubus::pilih('volume')->hitungKubus($sisi);
echo '<br>';

?>