<?php

namespace OopPrinciple\Encapsulation\Classes;

/**
 * Description of ClassWithPrivate
 *
 * @author dwc
 */
class ProgrammerMaluMalu
{

    private $nama = 'Codejunior';
    private $pekerjaan = 'Programmer';

    private function kenalanDonk()
    {
        echo " nama :" . $this->nama;
        echo " pekerjaan :" . $this->pekerjaan;
    }

}
