<?php


namespace App\Interfaces;


use Doctrine\Common\Collections\ArrayCollection;

interface IExportFile
{

    public function export(array $items);

}