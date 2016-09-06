<?php

/**
 * Description of Mobil
 *
 * @author dwc
 */
class Mobil
{
    
    /** property **/
    private $warna;
    private $rangkaMesin;
    private $statEngine = 'mati';
    private $tahunProduksi;
    private $label;

    
    /** attribute **/
    
    public function setLabel($label){
        $this->label = $label;
    }
    
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
    
    public function setNoRangka($noRangka){
        $this->rangkaMesin =$noRangka;
    }

    public function setTahunProduksi($tahunProduksi)
    {
        $this->tahunProduksi = $tahunProduksi;
    }

    public function nyalakan()
    {
        echo "brum brum brum (ceritanya mesinnya nyala) <br/>";
        $this->statEngine = 'nyala';
    }

    public function matikan()
    {

        echo "mobil sudah mati <br/>";
        $this->statEngine = 'mati';
    }

    public function maju()
    {
        if ($this->statEngine == 'nyala') {
            echo "mobil maju";
        } else {
            echo "nyalain mesinnya dulu om <br/>";
        }
    }

    public function getInfo()
    {
        $infoMobil =  "INFO MOBIL ".$this->label;
        $infoMobil .=  "<br/>=================";  
        $infoMobil .= "<br/> WARNA :".$this->warna;
        $infoMobil .= "<br/> TAHUN:".$this->tahunProduksi;
        $infoMobil .= "<br/> NO RANGKA MESIN:". $this->rangkaMesin;
        $infoMobil .=  "<br/>=================<br/>";  
        echo $infoMobil;
        
    }

}


// Buat object dari class mobil

$mobilSaya = new Mobil();
$mobilSaya->setWarna('Merah');
$mobilSaya->setTahunProduksi('2015');
$mobilSaya->setNoRangka('45145-35-345');
$mobilSaya->setLabel('Mobil saya nih');
$mobilSaya->getInfo();

$mobilSaya->maju();

$mobilTetangga = new Mobil();
$mobilTetangga->setLabel('Mobil Tetangga');
$mobilTetangga->setWarna('Hitam');
$mobilTetangga->setTahunProduksi('2014');
$mobilTetangga->setNoRangka('45121-10-456');
$mobilTetangga->getInfo();
$mobilTetangga->nyalakan();
$mobilTetangga->maju();

$mobilKantor = new Mobil();
$mobilKantor->setLabel('Mobil Kantor');
$mobilKantor->setWarna('Biru');
$mobilKantor->setTahunProduksi('2014');
$mobilKantor->setNoRangka('34561-21-336');
$mobilKantor->getInfo();
        
        
?>