<?php

class Kubus{
    
    public function __construct($ENAM = 6){
        $this->ENAM = $ENAM;
    }

    public function luasKubus($sisi){
        echo "Luas kubus adalah : ". $this->ENAM * ($sisi * $sisi);
    }

    public function volumeKubus($sisi){
        echo "Volume kubus adalah : ". $sisi * $sisi * $sisi;
    }


    public function noChoice()
    {
        echo 'Anda tidak memilih';
    }

    public function prosesHitungKubus ($hitungKubus, $sisi)
    {
        switch ($hitungKubus) {
            case 'luas':
                $this->luasKubus($sisi);
                break;
            case 'volume':
                $this->volumeKubus($sisi);
                break;
            default:
            $this->noChoice();
        }
    }
}

$sisi = 6;
$hitungKubus = new Kubus;
$hitungKubus->prosesHitungKubus('luas', $sisi);

?>
