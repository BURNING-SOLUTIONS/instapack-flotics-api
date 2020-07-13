<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Albaranes
 *
 * @ORM\Table(name="albaranes", indexes={@ORM\Index(name="clv2-alb", columns={"Cli_Alb", "Dep_Alb", "Fec_Alb", "Sucursal_Alb", "Emp_Alb"}), @ORM\Index(name="clv8-alb", columns={"Fec_Alb", "Sucursal_Alb", "Emp_Alb"}), @ORM\Index(name="clv9-alb", columns={"Num_Alb", "Lin_Alb", "Nfaccli_Alb", "Sucursal_Alb", "Emp_Alb"}), @ORM\Index(name="clv10-alb", columns={"Num_Alb", "Lin_Alb", "Nfacmen_Alb", "Sucursal_Alb", "Emp_Alb"}), @ORM\Index(name="clv11-alb", columns={"Num_Alb", "Lin_Alb", "Nfacdis_Alb", "Sucursal_Alb", "Emp_Alb"}), @ORM\Index(name="clv12-alb", columns={"Num_Alb", "Lin_Alb", "Nfacarr_Alb", "Sucursal_Alb", "Emp_Alb"}), @ORM\Index(name="clv13-alb", columns={"Num_Alb", "Lin_Alb", "Nfaccom_Alb", "Sucursal_Alb", "Emp_Alb"}), @ORM\Index(name="clv3-alb", columns={"Men_Alb", "Fec_Alb", "Sucursal_Alb", "Emp_Alb"}), @ORM\Index(name="clv4-alb", columns={"Distrib_Alb", "Via_Alb", "Sucursal_Alb", "Emp_Alb"}), @ORM\Index(name="clv5-alb", columns={"Com_Alb", "Sucursal_Alb", "Emp_Alb"}), @ORM\Index(name="clv6-alb", columns={"Ref_Alb", "Sucursal_Alb", "Emp_Alb"}), @ORM\Index(name="clv7-alb", columns={"Sucursal_Alb", "Emp_Alb", "Ref2_Alb"}), @ORM\Index(name="clv14-alb", columns={"Bloqueo_Alb"})})
 * @ORM\Entity
 */
class Albaranes
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Alb", type="boolean", nullable=false)
     */
    private $bajaAlb = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Alb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalAlb = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Alb", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empAlb = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Alb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numAlb = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Alb", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linAlb = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Alb", type="integer", nullable=true)
     */
    private $cliAlb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Alb", type="string", length=12, nullable=true)
     */
    private $depAlb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Alb", type="integer", nullable=true)
     */
    private $menAlb = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Alb", type="datetime", nullable=true)
     */
    private $fecAlb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Com_Alb", type="smallint", nullable=true)
     */
    private $comAlb = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Via_Alb", type="smallint", nullable=true)
     */
    private $viaAlb = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Distrib_Alb", type="integer", nullable=true)
     */
    private $distribAlb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tip_Alb", type="string", length=5, nullable=true)
     */
    private $tipAlb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Alb", type="string", length=100, nullable=true)
     */
    private $refAlb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref2_Alb", type="string", length=100, nullable=true)
     */
    private $ref2Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ITotCli_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $itotcliAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ITotMen_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $itotmenAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iac_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $iacAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iam_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $iamAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Idi_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $idiAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iar_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $iarAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Seguro_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $seguroAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ISegVal_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $isegvalAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="IRee_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $ireeAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ILLucli_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $illucliAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ILLumen_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $illumenAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="IFuera_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $ifueraAlb = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Verifi_Alb", type="boolean", nullable=false)
     */
    private $verifiAlb = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="LLucli_Alb", type="boolean", nullable=false)
     */
    private $llucliAlb = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="LLumen_Alb", type="boolean", nullable=false)
     */
    private $llumenAlb = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Fuera_Alb", type="boolean", nullable=true)
     */
    private $fueraAlb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Alb", type="string", length=100, nullable=true)
     */
    private $descAlb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Usu_Alb", type="smallint", nullable=true)
     */
    private $usuAlb = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nfaccli_Alb", type="integer", nullable=true)
     */
    private $nfaccliAlb = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Ffaccli_Alb", type="datetime", nullable=true)
     */
    private $ffaccliAlb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nfacmen_Alb", type="integer", nullable=true)
     */
    private $nfacmenAlb = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Ffacmen_Alb", type="datetime", nullable=true)
     */
    private $ffacmenAlb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nfaccom_Alb", type="integer", nullable=true)
     */
    private $nfaccomAlb = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Ffaccom_Alb", type="datetime", nullable=true)
     */
    private $ffaccomAlb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nfacdis_Alb", type="integer", nullable=true)
     */
    private $nfacdisAlb = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Ffacdis_Alb", type="datetime", nullable=true)
     */
    private $ffacdisAlb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nfacarr_Alb", type="integer", nullable=true)
     */
    private $nfacarrAlb = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Ffacarr_Alb", type="datetime", nullable=true)
     */
    private $ffacarrAlb;

    /**
     * @var bool
     *
     * @ORM\Column(name="Bloqueo_Alb", type="boolean", nullable=false)
     */
    private $bloqueoAlb = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Iva_Alb", type="boolean", nullable=true)
     */
    private $ivaAlb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele1_Alb", type="string", length=5, nullable=true)
     */
    private $ele1Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni1_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni1Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib1_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib1Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp1_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp1Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco1_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco1Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi1_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi1Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par1_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par1Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp1_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp1Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco1_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco1Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi1_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi1Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar1_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar1Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele2_Alb", type="string", length=5, nullable=true)
     */
    private $ele2Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni2_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni2Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib2_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib2Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp2_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp2Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco2_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco2Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi2_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi2Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par2_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par2Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp2_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp2Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco2_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco2Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi2_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi2Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar2_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar2Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele3_Alb", type="string", length=5, nullable=true)
     */
    private $ele3Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni3_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni3Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib3_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib3Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp3_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp3Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco3_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco3Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi3_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi3Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par3_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par3Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp3_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp3Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco3_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco3Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi3_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi3Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar3_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar3Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele4_Alb", type="string", length=5, nullable=true)
     */
    private $ele4Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni4_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni4Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib4_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib4Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp4_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp4Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco4_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco4Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi4_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi4Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par4_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par4Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp4_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp4Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco4_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco4Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi4_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi4Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar4_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar4Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele5_Alb", type="string", length=5, nullable=true)
     */
    private $ele5Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni5_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni5Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib5_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib5Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp5_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp5Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco5_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco5Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi5_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi5Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par5_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par5Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp5_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp5Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco5_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco5Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi5_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi5Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar5_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar5Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele6_Alb", type="string", length=5, nullable=true)
     */
    private $ele6Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni6_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni6Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib6_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib6Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp6_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp6Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco6_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco6Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi6_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi6Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par6_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par6Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp6_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp6Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco6_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco6Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi6_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi6Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar6_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar6Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele7_Alb", type="string", length=5, nullable=true)
     */
    private $ele7Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni7_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni7Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib7_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib7Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp7_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp7Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco7_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco7Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi7_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi7Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par7_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par7Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp7_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp7Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco7_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco7Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi7_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi7Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar7_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar7Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele8_Alb", type="string", length=5, nullable=true)
     */
    private $ele8Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni8_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni8Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib8_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib8Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp8_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp8Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco8_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco8Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi8_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi8Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par8_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par8Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp8_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp8Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco8_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco8Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi8_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi8Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar8_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar8Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele9_Alb", type="string", length=5, nullable=true)
     */
    private $ele9Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni9_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni9Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib9_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib9Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp9_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp9Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco9_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco9Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi9_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi9Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par9_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par9Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp9_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp9Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco9_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco9Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi9_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi9Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar9_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar9Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele10_Alb", type="string", length=5, nullable=true)
     */
    private $ele10Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni10_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni10Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib10_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib10Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp10_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp10Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco10_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco10Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi10_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi10Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par10_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par10Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp10_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp10Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco10_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco10Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi10_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi10Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar10_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar10Alb = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FueraMen_Alb", type="boolean", nullable=true)
     */
    private $fueramenAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="IFueraMen_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $ifueramenAlb = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="OfiOri_Alb", type="integer", nullable=true)
     */
    private $ofioriAlb;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Verifi2_Alb", type="boolean", nullable=true)
     */
    private $verifi2Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IAdelanto_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $iadelantoAlb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zonpre_Alb", type="string", length=5, nullable=true)
     */
    private $zonpreAlb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Confirma_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $confirmaAlb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Gestion_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $gestionAlb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Oficial_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $oficialAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ConMen_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $conmenAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ConDis_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $condisAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ConArr_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $conarrAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="GesMen_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $gesmenAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="GesDis_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $gesdisAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="GesArr_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $gesarrAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TraMen_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tramenAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TraDis_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tradisAlb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TraArr_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $traarrAlb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="FFabCli_Alb", type="string", length=1, nullable=true)
     */
    private $ffabcliAlb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecTra_Alb", type="datetime", nullable=true)
     */
    private $fectraAlb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ICarbuCli_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $icarbucliAlb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ICarbuMen_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $icarbumenAlb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele11_Alb", type="string", length=5, nullable=true)
     */
    private $ele11Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni11_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni11Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib11_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib11Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp11_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp11Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco11_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco11Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi11_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi11Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par11_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par11Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp11_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp11Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco11_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco11Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi11_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi11Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar11_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar11Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele12_Alb", type="string", length=5, nullable=true)
     */
    private $ele12Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni12_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni12Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib12_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib12Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp12_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp12Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco12_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco12Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi12_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi12Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par12_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par12Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp12_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp12Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco12_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco12Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi12_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi12Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar12_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar12Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele13_Alb", type="string", length=5, nullable=true)
     */
    private $ele13Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni13_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni13Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib13_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib13Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp13_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp13Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco13_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco13Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi13_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi13Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par13_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par13Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp13_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp13Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco13_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco13Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi13_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi13Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar13_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar13Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele14_Alb", type="string", length=5, nullable=true)
     */
    private $ele14Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni14_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni14Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib14_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib14Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp14_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp14Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco14_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco14Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi14_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi14Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par14_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par14Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp14_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp14Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco14_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco14Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi14_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi14Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar14_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar14Alb = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele15_Alb", type="string", length=5, nullable=true)
     */
    private $ele15Alb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni15_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni15Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unib15_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $unib15Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp15_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp15Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco15_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco15Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi15_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi15Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par15_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $par15Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp15_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp15Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco15_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco15Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi15_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi15Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar15_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar15Alb = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ICobroACuenta_Alb", type="float", precision=53, scale=0, nullable=true)
     */
    private $icobroacuentaAlb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumFacProv_Alb", type="string", length=15, nullable=true)
     */
    private $numfacprovAlb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObsProv_Alb", type="string", length=180, nullable=true)
     */
    private $obsprovAlb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EstadoProv_Alb", type="string", length=15, nullable=true)
     */
    private $estadoprovAlb;

    public function getBajaAlb(): ?bool
    {
        return $this->bajaAlb;
    }

    public function setBajaAlb(bool $bajaAlb): self
    {
        $this->bajaAlb = $bajaAlb;

        return $this;
    }

    public function getSucursalAlb(): ?int
    {
        return $this->sucursalAlb;
    }

    public function getEmpAlb(): ?int
    {
        return $this->empAlb;
    }

    public function getNumAlb(): ?int
    {
        return $this->numAlb;
    }

    public function getLinAlb(): ?int
    {
        return $this->linAlb;
    }

    public function getCliAlb(): ?int
    {
        return $this->cliAlb;
    }

    public function setCliAlb(?int $cliAlb): self
    {
        $this->cliAlb = $cliAlb;

        return $this;
    }

    public function getDepAlb(): ?string
    {
        return $this->depAlb;
    }

    public function setDepAlb(?string $depAlb): self
    {
        $this->depAlb = $depAlb;

        return $this;
    }

    public function getMenAlb(): ?int
    {
        return $this->menAlb;
    }

    public function setMenAlb(?int $menAlb): self
    {
        $this->menAlb = $menAlb;

        return $this;
    }

    public function getFecAlb(): ?\DateTimeInterface
    {
        return $this->fecAlb;
    }

    public function setFecAlb(?\DateTimeInterface $fecAlb): self
    {
        $this->fecAlb = $fecAlb;

        return $this;
    }

    public function getComAlb(): ?int
    {
        return $this->comAlb;
    }

    public function setComAlb(?int $comAlb): self
    {
        $this->comAlb = $comAlb;

        return $this;
    }

    public function getViaAlb(): ?int
    {
        return $this->viaAlb;
    }

    public function setViaAlb(?int $viaAlb): self
    {
        $this->viaAlb = $viaAlb;

        return $this;
    }

    public function getDistribAlb(): ?int
    {
        return $this->distribAlb;
    }

    public function setDistribAlb(?int $distribAlb): self
    {
        $this->distribAlb = $distribAlb;

        return $this;
    }

    public function getTipAlb(): ?string
    {
        return $this->tipAlb;
    }

    public function setTipAlb(?string $tipAlb): self
    {
        $this->tipAlb = $tipAlb;

        return $this;
    }

    public function getRefAlb(): ?string
    {
        return $this->refAlb;
    }

    public function setRefAlb(?string $refAlb): self
    {
        $this->refAlb = $refAlb;

        return $this;
    }

    public function getRef2Alb(): ?string
    {
        return $this->ref2Alb;
    }

    public function setRef2Alb(?string $ref2Alb): self
    {
        $this->ref2Alb = $ref2Alb;

        return $this;
    }

    public function getItotcliAlb(): ?float
    {
        return $this->itotcliAlb;
    }

    public function setItotcliAlb(?float $itotcliAlb): self
    {
        $this->itotcliAlb = $itotcliAlb;

        return $this;
    }

    public function getItotmenAlb(): ?float
    {
        return $this->itotmenAlb;
    }

    public function setItotmenAlb(?float $itotmenAlb): self
    {
        $this->itotmenAlb = $itotmenAlb;

        return $this;
    }

    public function getIacAlb(): ?float
    {
        return $this->iacAlb;
    }

    public function setIacAlb(?float $iacAlb): self
    {
        $this->iacAlb = $iacAlb;

        return $this;
    }

    public function getIamAlb(): ?float
    {
        return $this->iamAlb;
    }

    public function setIamAlb(?float $iamAlb): self
    {
        $this->iamAlb = $iamAlb;

        return $this;
    }

    public function getIdiAlb(): ?float
    {
        return $this->idiAlb;
    }

    public function setIdiAlb(?float $idiAlb): self
    {
        $this->idiAlb = $idiAlb;

        return $this;
    }

    public function getIarAlb(): ?float
    {
        return $this->iarAlb;
    }

    public function setIarAlb(?float $iarAlb): self
    {
        $this->iarAlb = $iarAlb;

        return $this;
    }

    public function getSeguroAlb(): ?float
    {
        return $this->seguroAlb;
    }

    public function setSeguroAlb(?float $seguroAlb): self
    {
        $this->seguroAlb = $seguroAlb;

        return $this;
    }

    public function getIsegvalAlb(): ?float
    {
        return $this->isegvalAlb;
    }

    public function setIsegvalAlb(?float $isegvalAlb): self
    {
        $this->isegvalAlb = $isegvalAlb;

        return $this;
    }

    public function getIreeAlb(): ?float
    {
        return $this->ireeAlb;
    }

    public function setIreeAlb(?float $ireeAlb): self
    {
        $this->ireeAlb = $ireeAlb;

        return $this;
    }

    public function getIllucliAlb(): ?float
    {
        return $this->illucliAlb;
    }

    public function setIllucliAlb(?float $illucliAlb): self
    {
        $this->illucliAlb = $illucliAlb;

        return $this;
    }

    public function getIllumenAlb(): ?float
    {
        return $this->illumenAlb;
    }

    public function setIllumenAlb(?float $illumenAlb): self
    {
        $this->illumenAlb = $illumenAlb;

        return $this;
    }

    public function getIfueraAlb(): ?float
    {
        return $this->ifueraAlb;
    }

    public function setIfueraAlb(?float $ifueraAlb): self
    {
        $this->ifueraAlb = $ifueraAlb;

        return $this;
    }

    public function getVerifiAlb(): ?bool
    {
        return $this->verifiAlb;
    }

    public function setVerifiAlb(bool $verifiAlb): self
    {
        $this->verifiAlb = $verifiAlb;

        return $this;
    }

    public function getLlucliAlb(): ?bool
    {
        return $this->llucliAlb;
    }

    public function setLlucliAlb(bool $llucliAlb): self
    {
        $this->llucliAlb = $llucliAlb;

        return $this;
    }

    public function getLlumenAlb(): ?bool
    {
        return $this->llumenAlb;
    }

    public function setLlumenAlb(bool $llumenAlb): self
    {
        $this->llumenAlb = $llumenAlb;

        return $this;
    }

    public function getFueraAlb(): ?bool
    {
        return $this->fueraAlb;
    }

    public function setFueraAlb(?bool $fueraAlb): self
    {
        $this->fueraAlb = $fueraAlb;

        return $this;
    }

    public function getDescAlb(): ?string
    {
        return $this->descAlb;
    }

    public function setDescAlb(?string $descAlb): self
    {
        $this->descAlb = $descAlb;

        return $this;
    }

    public function getUsuAlb(): ?int
    {
        return $this->usuAlb;
    }

    public function setUsuAlb(?int $usuAlb): self
    {
        $this->usuAlb = $usuAlb;

        return $this;
    }

    public function getNfaccliAlb(): ?int
    {
        return $this->nfaccliAlb;
    }

    public function setNfaccliAlb(?int $nfaccliAlb): self
    {
        $this->nfaccliAlb = $nfaccliAlb;

        return $this;
    }

    public function getFfaccliAlb(): ?\DateTimeInterface
    {
        return $this->ffaccliAlb;
    }

    public function setFfaccliAlb(?\DateTimeInterface $ffaccliAlb): self
    {
        $this->ffaccliAlb = $ffaccliAlb;

        return $this;
    }

    public function getNfacmenAlb(): ?int
    {
        return $this->nfacmenAlb;
    }

    public function setNfacmenAlb(?int $nfacmenAlb): self
    {
        $this->nfacmenAlb = $nfacmenAlb;

        return $this;
    }

    public function getFfacmenAlb(): ?\DateTimeInterface
    {
        return $this->ffacmenAlb;
    }

    public function setFfacmenAlb(?\DateTimeInterface $ffacmenAlb): self
    {
        $this->ffacmenAlb = $ffacmenAlb;

        return $this;
    }

    public function getNfaccomAlb(): ?int
    {
        return $this->nfaccomAlb;
    }

    public function setNfaccomAlb(?int $nfaccomAlb): self
    {
        $this->nfaccomAlb = $nfaccomAlb;

        return $this;
    }

    public function getFfaccomAlb(): ?\DateTimeInterface
    {
        return $this->ffaccomAlb;
    }

    public function setFfaccomAlb(?\DateTimeInterface $ffaccomAlb): self
    {
        $this->ffaccomAlb = $ffaccomAlb;

        return $this;
    }

    public function getNfacdisAlb(): ?int
    {
        return $this->nfacdisAlb;
    }

    public function setNfacdisAlb(?int $nfacdisAlb): self
    {
        $this->nfacdisAlb = $nfacdisAlb;

        return $this;
    }

    public function getFfacdisAlb(): ?\DateTimeInterface
    {
        return $this->ffacdisAlb;
    }

    public function setFfacdisAlb(?\DateTimeInterface $ffacdisAlb): self
    {
        $this->ffacdisAlb = $ffacdisAlb;

        return $this;
    }

    public function getNfacarrAlb(): ?int
    {
        return $this->nfacarrAlb;
    }

    public function setNfacarrAlb(?int $nfacarrAlb): self
    {
        $this->nfacarrAlb = $nfacarrAlb;

        return $this;
    }

    public function getFfacarrAlb(): ?\DateTimeInterface
    {
        return $this->ffacarrAlb;
    }

    public function setFfacarrAlb(?\DateTimeInterface $ffacarrAlb): self
    {
        $this->ffacarrAlb = $ffacarrAlb;

        return $this;
    }

    public function getBloqueoAlb(): ?bool
    {
        return $this->bloqueoAlb;
    }

    public function setBloqueoAlb(bool $bloqueoAlb): self
    {
        $this->bloqueoAlb = $bloqueoAlb;

        return $this;
    }

    public function getIvaAlb(): ?bool
    {
        return $this->ivaAlb;
    }

    public function setIvaAlb(?bool $ivaAlb): self
    {
        $this->ivaAlb = $ivaAlb;

        return $this;
    }

    public function getEle1Alb(): ?string
    {
        return $this->ele1Alb;
    }

    public function setEle1Alb(?string $ele1Alb): self
    {
        $this->ele1Alb = $ele1Alb;

        return $this;
    }

    public function getUni1Alb(): ?float
    {
        return $this->uni1Alb;
    }

    public function setUni1Alb(?float $uni1Alb): self
    {
        $this->uni1Alb = $uni1Alb;

        return $this;
    }

    public function getUnib1Alb(): ?float
    {
        return $this->unib1Alb;
    }

    public function setUnib1Alb(?float $unib1Alb): self
    {
        $this->unib1Alb = $unib1Alb;

        return $this;
    }

    public function getPvp1Alb(): ?float
    {
        return $this->pvp1Alb;
    }

    public function setPvp1Alb(?float $pvp1Alb): self
    {
        $this->pvp1Alb = $pvp1Alb;

        return $this;
    }

    public function getPco1Alb(): ?float
    {
        return $this->pco1Alb;
    }

    public function setPco1Alb(?float $pco1Alb): self
    {
        $this->pco1Alb = $pco1Alb;

        return $this;
    }

    public function getPdi1Alb(): ?float
    {
        return $this->pdi1Alb;
    }

    public function setPdi1Alb(?float $pdi1Alb): self
    {
        $this->pdi1Alb = $pdi1Alb;

        return $this;
    }

    public function getPar1Alb(): ?float
    {
        return $this->par1Alb;
    }

    public function setPar1Alb(?float $par1Alb): self
    {
        $this->par1Alb = $par1Alb;

        return $this;
    }

    public function getTpvp1Alb(): ?float
    {
        return $this->tpvp1Alb;
    }

    public function setTpvp1Alb(?float $tpvp1Alb): self
    {
        $this->tpvp1Alb = $tpvp1Alb;

        return $this;
    }

    public function getTpco1Alb(): ?float
    {
        return $this->tpco1Alb;
    }

    public function setTpco1Alb(?float $tpco1Alb): self
    {
        $this->tpco1Alb = $tpco1Alb;

        return $this;
    }

    public function getTpdi1Alb(): ?float
    {
        return $this->tpdi1Alb;
    }

    public function setTpdi1Alb(?float $tpdi1Alb): self
    {
        $this->tpdi1Alb = $tpdi1Alb;

        return $this;
    }

    public function getTpar1Alb(): ?float
    {
        return $this->tpar1Alb;
    }

    public function setTpar1Alb(?float $tpar1Alb): self
    {
        $this->tpar1Alb = $tpar1Alb;

        return $this;
    }

    public function getEle2Alb(): ?string
    {
        return $this->ele2Alb;
    }

    public function setEle2Alb(?string $ele2Alb): self
    {
        $this->ele2Alb = $ele2Alb;

        return $this;
    }

    public function getUni2Alb(): ?float
    {
        return $this->uni2Alb;
    }

    public function setUni2Alb(?float $uni2Alb): self
    {
        $this->uni2Alb = $uni2Alb;

        return $this;
    }

    public function getUnib2Alb(): ?float
    {
        return $this->unib2Alb;
    }

    public function setUnib2Alb(?float $unib2Alb): self
    {
        $this->unib2Alb = $unib2Alb;

        return $this;
    }

    public function getPvp2Alb(): ?float
    {
        return $this->pvp2Alb;
    }

    public function setPvp2Alb(?float $pvp2Alb): self
    {
        $this->pvp2Alb = $pvp2Alb;

        return $this;
    }

    public function getPco2Alb(): ?float
    {
        return $this->pco2Alb;
    }

    public function setPco2Alb(?float $pco2Alb): self
    {
        $this->pco2Alb = $pco2Alb;

        return $this;
    }

    public function getPdi2Alb(): ?float
    {
        return $this->pdi2Alb;
    }

    public function setPdi2Alb(?float $pdi2Alb): self
    {
        $this->pdi2Alb = $pdi2Alb;

        return $this;
    }

    public function getPar2Alb(): ?float
    {
        return $this->par2Alb;
    }

    public function setPar2Alb(?float $par2Alb): self
    {
        $this->par2Alb = $par2Alb;

        return $this;
    }

    public function getTpvp2Alb(): ?float
    {
        return $this->tpvp2Alb;
    }

    public function setTpvp2Alb(?float $tpvp2Alb): self
    {
        $this->tpvp2Alb = $tpvp2Alb;

        return $this;
    }

    public function getTpco2Alb(): ?float
    {
        return $this->tpco2Alb;
    }

    public function setTpco2Alb(?float $tpco2Alb): self
    {
        $this->tpco2Alb = $tpco2Alb;

        return $this;
    }

    public function getTpdi2Alb(): ?float
    {
        return $this->tpdi2Alb;
    }

    public function setTpdi2Alb(?float $tpdi2Alb): self
    {
        $this->tpdi2Alb = $tpdi2Alb;

        return $this;
    }

    public function getTpar2Alb(): ?float
    {
        return $this->tpar2Alb;
    }

    public function setTpar2Alb(?float $tpar2Alb): self
    {
        $this->tpar2Alb = $tpar2Alb;

        return $this;
    }

    public function getEle3Alb(): ?string
    {
        return $this->ele3Alb;
    }

    public function setEle3Alb(?string $ele3Alb): self
    {
        $this->ele3Alb = $ele3Alb;

        return $this;
    }

    public function getUni3Alb(): ?float
    {
        return $this->uni3Alb;
    }

    public function setUni3Alb(?float $uni3Alb): self
    {
        $this->uni3Alb = $uni3Alb;

        return $this;
    }

    public function getUnib3Alb(): ?float
    {
        return $this->unib3Alb;
    }

    public function setUnib3Alb(?float $unib3Alb): self
    {
        $this->unib3Alb = $unib3Alb;

        return $this;
    }

    public function getPvp3Alb(): ?float
    {
        return $this->pvp3Alb;
    }

    public function setPvp3Alb(?float $pvp3Alb): self
    {
        $this->pvp3Alb = $pvp3Alb;

        return $this;
    }

    public function getPco3Alb(): ?float
    {
        return $this->pco3Alb;
    }

    public function setPco3Alb(?float $pco3Alb): self
    {
        $this->pco3Alb = $pco3Alb;

        return $this;
    }

    public function getPdi3Alb(): ?float
    {
        return $this->pdi3Alb;
    }

    public function setPdi3Alb(?float $pdi3Alb): self
    {
        $this->pdi3Alb = $pdi3Alb;

        return $this;
    }

    public function getPar3Alb(): ?float
    {
        return $this->par3Alb;
    }

    public function setPar3Alb(?float $par3Alb): self
    {
        $this->par3Alb = $par3Alb;

        return $this;
    }

    public function getTpvp3Alb(): ?float
    {
        return $this->tpvp3Alb;
    }

    public function setTpvp3Alb(?float $tpvp3Alb): self
    {
        $this->tpvp3Alb = $tpvp3Alb;

        return $this;
    }

    public function getTpco3Alb(): ?float
    {
        return $this->tpco3Alb;
    }

    public function setTpco3Alb(?float $tpco3Alb): self
    {
        $this->tpco3Alb = $tpco3Alb;

        return $this;
    }

    public function getTpdi3Alb(): ?float
    {
        return $this->tpdi3Alb;
    }

    public function setTpdi3Alb(?float $tpdi3Alb): self
    {
        $this->tpdi3Alb = $tpdi3Alb;

        return $this;
    }

    public function getTpar3Alb(): ?float
    {
        return $this->tpar3Alb;
    }

    public function setTpar3Alb(?float $tpar3Alb): self
    {
        $this->tpar3Alb = $tpar3Alb;

        return $this;
    }

    public function getEle4Alb(): ?string
    {
        return $this->ele4Alb;
    }

    public function setEle4Alb(?string $ele4Alb): self
    {
        $this->ele4Alb = $ele4Alb;

        return $this;
    }

    public function getUni4Alb(): ?float
    {
        return $this->uni4Alb;
    }

    public function setUni4Alb(?float $uni4Alb): self
    {
        $this->uni4Alb = $uni4Alb;

        return $this;
    }

    public function getUnib4Alb(): ?float
    {
        return $this->unib4Alb;
    }

    public function setUnib4Alb(?float $unib4Alb): self
    {
        $this->unib4Alb = $unib4Alb;

        return $this;
    }

    public function getPvp4Alb(): ?float
    {
        return $this->pvp4Alb;
    }

    public function setPvp4Alb(?float $pvp4Alb): self
    {
        $this->pvp4Alb = $pvp4Alb;

        return $this;
    }

    public function getPco4Alb(): ?float
    {
        return $this->pco4Alb;
    }

    public function setPco4Alb(?float $pco4Alb): self
    {
        $this->pco4Alb = $pco4Alb;

        return $this;
    }

    public function getPdi4Alb(): ?float
    {
        return $this->pdi4Alb;
    }

    public function setPdi4Alb(?float $pdi4Alb): self
    {
        $this->pdi4Alb = $pdi4Alb;

        return $this;
    }

    public function getPar4Alb(): ?float
    {
        return $this->par4Alb;
    }

    public function setPar4Alb(?float $par4Alb): self
    {
        $this->par4Alb = $par4Alb;

        return $this;
    }

    public function getTpvp4Alb(): ?float
    {
        return $this->tpvp4Alb;
    }

    public function setTpvp4Alb(?float $tpvp4Alb): self
    {
        $this->tpvp4Alb = $tpvp4Alb;

        return $this;
    }

    public function getTpco4Alb(): ?float
    {
        return $this->tpco4Alb;
    }

    public function setTpco4Alb(?float $tpco4Alb): self
    {
        $this->tpco4Alb = $tpco4Alb;

        return $this;
    }

    public function getTpdi4Alb(): ?float
    {
        return $this->tpdi4Alb;
    }

    public function setTpdi4Alb(?float $tpdi4Alb): self
    {
        $this->tpdi4Alb = $tpdi4Alb;

        return $this;
    }

    public function getTpar4Alb(): ?float
    {
        return $this->tpar4Alb;
    }

    public function setTpar4Alb(?float $tpar4Alb): self
    {
        $this->tpar4Alb = $tpar4Alb;

        return $this;
    }

    public function getEle5Alb(): ?string
    {
        return $this->ele5Alb;
    }

    public function setEle5Alb(?string $ele5Alb): self
    {
        $this->ele5Alb = $ele5Alb;

        return $this;
    }

    public function getUni5Alb(): ?float
    {
        return $this->uni5Alb;
    }

    public function setUni5Alb(?float $uni5Alb): self
    {
        $this->uni5Alb = $uni5Alb;

        return $this;
    }

    public function getUnib5Alb(): ?float
    {
        return $this->unib5Alb;
    }

    public function setUnib5Alb(?float $unib5Alb): self
    {
        $this->unib5Alb = $unib5Alb;

        return $this;
    }

    public function getPvp5Alb(): ?float
    {
        return $this->pvp5Alb;
    }

    public function setPvp5Alb(?float $pvp5Alb): self
    {
        $this->pvp5Alb = $pvp5Alb;

        return $this;
    }

    public function getPco5Alb(): ?float
    {
        return $this->pco5Alb;
    }

    public function setPco5Alb(?float $pco5Alb): self
    {
        $this->pco5Alb = $pco5Alb;

        return $this;
    }

    public function getPdi5Alb(): ?float
    {
        return $this->pdi5Alb;
    }

    public function setPdi5Alb(?float $pdi5Alb): self
    {
        $this->pdi5Alb = $pdi5Alb;

        return $this;
    }

    public function getPar5Alb(): ?float
    {
        return $this->par5Alb;
    }

    public function setPar5Alb(?float $par5Alb): self
    {
        $this->par5Alb = $par5Alb;

        return $this;
    }

    public function getTpvp5Alb(): ?float
    {
        return $this->tpvp5Alb;
    }

    public function setTpvp5Alb(?float $tpvp5Alb): self
    {
        $this->tpvp5Alb = $tpvp5Alb;

        return $this;
    }

    public function getTpco5Alb(): ?float
    {
        return $this->tpco5Alb;
    }

    public function setTpco5Alb(?float $tpco5Alb): self
    {
        $this->tpco5Alb = $tpco5Alb;

        return $this;
    }

    public function getTpdi5Alb(): ?float
    {
        return $this->tpdi5Alb;
    }

    public function setTpdi5Alb(?float $tpdi5Alb): self
    {
        $this->tpdi5Alb = $tpdi5Alb;

        return $this;
    }

    public function getTpar5Alb(): ?float
    {
        return $this->tpar5Alb;
    }

    public function setTpar5Alb(?float $tpar5Alb): self
    {
        $this->tpar5Alb = $tpar5Alb;

        return $this;
    }

    public function getEle6Alb(): ?string
    {
        return $this->ele6Alb;
    }

    public function setEle6Alb(?string $ele6Alb): self
    {
        $this->ele6Alb = $ele6Alb;

        return $this;
    }

    public function getUni6Alb(): ?float
    {
        return $this->uni6Alb;
    }

    public function setUni6Alb(?float $uni6Alb): self
    {
        $this->uni6Alb = $uni6Alb;

        return $this;
    }

    public function getUnib6Alb(): ?float
    {
        return $this->unib6Alb;
    }

    public function setUnib6Alb(?float $unib6Alb): self
    {
        $this->unib6Alb = $unib6Alb;

        return $this;
    }

    public function getPvp6Alb(): ?float
    {
        return $this->pvp6Alb;
    }

    public function setPvp6Alb(?float $pvp6Alb): self
    {
        $this->pvp6Alb = $pvp6Alb;

        return $this;
    }

    public function getPco6Alb(): ?float
    {
        return $this->pco6Alb;
    }

    public function setPco6Alb(?float $pco6Alb): self
    {
        $this->pco6Alb = $pco6Alb;

        return $this;
    }

    public function getPdi6Alb(): ?float
    {
        return $this->pdi6Alb;
    }

    public function setPdi6Alb(?float $pdi6Alb): self
    {
        $this->pdi6Alb = $pdi6Alb;

        return $this;
    }

    public function getPar6Alb(): ?float
    {
        return $this->par6Alb;
    }

    public function setPar6Alb(?float $par6Alb): self
    {
        $this->par6Alb = $par6Alb;

        return $this;
    }

    public function getTpvp6Alb(): ?float
    {
        return $this->tpvp6Alb;
    }

    public function setTpvp6Alb(?float $tpvp6Alb): self
    {
        $this->tpvp6Alb = $tpvp6Alb;

        return $this;
    }

    public function getTpco6Alb(): ?float
    {
        return $this->tpco6Alb;
    }

    public function setTpco6Alb(?float $tpco6Alb): self
    {
        $this->tpco6Alb = $tpco6Alb;

        return $this;
    }

    public function getTpdi6Alb(): ?float
    {
        return $this->tpdi6Alb;
    }

    public function setTpdi6Alb(?float $tpdi6Alb): self
    {
        $this->tpdi6Alb = $tpdi6Alb;

        return $this;
    }

    public function getTpar6Alb(): ?float
    {
        return $this->tpar6Alb;
    }

    public function setTpar6Alb(?float $tpar6Alb): self
    {
        $this->tpar6Alb = $tpar6Alb;

        return $this;
    }

    public function getEle7Alb(): ?string
    {
        return $this->ele7Alb;
    }

    public function setEle7Alb(?string $ele7Alb): self
    {
        $this->ele7Alb = $ele7Alb;

        return $this;
    }

    public function getUni7Alb(): ?float
    {
        return $this->uni7Alb;
    }

    public function setUni7Alb(?float $uni7Alb): self
    {
        $this->uni7Alb = $uni7Alb;

        return $this;
    }

    public function getUnib7Alb(): ?float
    {
        return $this->unib7Alb;
    }

    public function setUnib7Alb(?float $unib7Alb): self
    {
        $this->unib7Alb = $unib7Alb;

        return $this;
    }

    public function getPvp7Alb(): ?float
    {
        return $this->pvp7Alb;
    }

    public function setPvp7Alb(?float $pvp7Alb): self
    {
        $this->pvp7Alb = $pvp7Alb;

        return $this;
    }

    public function getPco7Alb(): ?float
    {
        return $this->pco7Alb;
    }

    public function setPco7Alb(?float $pco7Alb): self
    {
        $this->pco7Alb = $pco7Alb;

        return $this;
    }

    public function getPdi7Alb(): ?float
    {
        return $this->pdi7Alb;
    }

    public function setPdi7Alb(?float $pdi7Alb): self
    {
        $this->pdi7Alb = $pdi7Alb;

        return $this;
    }

    public function getPar7Alb(): ?float
    {
        return $this->par7Alb;
    }

    public function setPar7Alb(?float $par7Alb): self
    {
        $this->par7Alb = $par7Alb;

        return $this;
    }

    public function getTpvp7Alb(): ?float
    {
        return $this->tpvp7Alb;
    }

    public function setTpvp7Alb(?float $tpvp7Alb): self
    {
        $this->tpvp7Alb = $tpvp7Alb;

        return $this;
    }

    public function getTpco7Alb(): ?float
    {
        return $this->tpco7Alb;
    }

    public function setTpco7Alb(?float $tpco7Alb): self
    {
        $this->tpco7Alb = $tpco7Alb;

        return $this;
    }

    public function getTpdi7Alb(): ?float
    {
        return $this->tpdi7Alb;
    }

    public function setTpdi7Alb(?float $tpdi7Alb): self
    {
        $this->tpdi7Alb = $tpdi7Alb;

        return $this;
    }

    public function getTpar7Alb(): ?float
    {
        return $this->tpar7Alb;
    }

    public function setTpar7Alb(?float $tpar7Alb): self
    {
        $this->tpar7Alb = $tpar7Alb;

        return $this;
    }

    public function getEle8Alb(): ?string
    {
        return $this->ele8Alb;
    }

    public function setEle8Alb(?string $ele8Alb): self
    {
        $this->ele8Alb = $ele8Alb;

        return $this;
    }

    public function getUni8Alb(): ?float
    {
        return $this->uni8Alb;
    }

    public function setUni8Alb(?float $uni8Alb): self
    {
        $this->uni8Alb = $uni8Alb;

        return $this;
    }

    public function getUnib8Alb(): ?float
    {
        return $this->unib8Alb;
    }

    public function setUnib8Alb(?float $unib8Alb): self
    {
        $this->unib8Alb = $unib8Alb;

        return $this;
    }

    public function getPvp8Alb(): ?float
    {
        return $this->pvp8Alb;
    }

    public function setPvp8Alb(?float $pvp8Alb): self
    {
        $this->pvp8Alb = $pvp8Alb;

        return $this;
    }

    public function getPco8Alb(): ?float
    {
        return $this->pco8Alb;
    }

    public function setPco8Alb(?float $pco8Alb): self
    {
        $this->pco8Alb = $pco8Alb;

        return $this;
    }

    public function getPdi8Alb(): ?float
    {
        return $this->pdi8Alb;
    }

    public function setPdi8Alb(?float $pdi8Alb): self
    {
        $this->pdi8Alb = $pdi8Alb;

        return $this;
    }

    public function getPar8Alb(): ?float
    {
        return $this->par8Alb;
    }

    public function setPar8Alb(?float $par8Alb): self
    {
        $this->par8Alb = $par8Alb;

        return $this;
    }

    public function getTpvp8Alb(): ?float
    {
        return $this->tpvp8Alb;
    }

    public function setTpvp8Alb(?float $tpvp8Alb): self
    {
        $this->tpvp8Alb = $tpvp8Alb;

        return $this;
    }

    public function getTpco8Alb(): ?float
    {
        return $this->tpco8Alb;
    }

    public function setTpco8Alb(?float $tpco8Alb): self
    {
        $this->tpco8Alb = $tpco8Alb;

        return $this;
    }

    public function getTpdi8Alb(): ?float
    {
        return $this->tpdi8Alb;
    }

    public function setTpdi8Alb(?float $tpdi8Alb): self
    {
        $this->tpdi8Alb = $tpdi8Alb;

        return $this;
    }

    public function getTpar8Alb(): ?float
    {
        return $this->tpar8Alb;
    }

    public function setTpar8Alb(?float $tpar8Alb): self
    {
        $this->tpar8Alb = $tpar8Alb;

        return $this;
    }

    public function getEle9Alb(): ?string
    {
        return $this->ele9Alb;
    }

    public function setEle9Alb(?string $ele9Alb): self
    {
        $this->ele9Alb = $ele9Alb;

        return $this;
    }

    public function getUni9Alb(): ?float
    {
        return $this->uni9Alb;
    }

    public function setUni9Alb(?float $uni9Alb): self
    {
        $this->uni9Alb = $uni9Alb;

        return $this;
    }

    public function getUnib9Alb(): ?float
    {
        return $this->unib9Alb;
    }

    public function setUnib9Alb(?float $unib9Alb): self
    {
        $this->unib9Alb = $unib9Alb;

        return $this;
    }

    public function getPvp9Alb(): ?float
    {
        return $this->pvp9Alb;
    }

    public function setPvp9Alb(?float $pvp9Alb): self
    {
        $this->pvp9Alb = $pvp9Alb;

        return $this;
    }

    public function getPco9Alb(): ?float
    {
        return $this->pco9Alb;
    }

    public function setPco9Alb(?float $pco9Alb): self
    {
        $this->pco9Alb = $pco9Alb;

        return $this;
    }

    public function getPdi9Alb(): ?float
    {
        return $this->pdi9Alb;
    }

    public function setPdi9Alb(?float $pdi9Alb): self
    {
        $this->pdi9Alb = $pdi9Alb;

        return $this;
    }

    public function getPar9Alb(): ?float
    {
        return $this->par9Alb;
    }

    public function setPar9Alb(?float $par9Alb): self
    {
        $this->par9Alb = $par9Alb;

        return $this;
    }

    public function getTpvp9Alb(): ?float
    {
        return $this->tpvp9Alb;
    }

    public function setTpvp9Alb(?float $tpvp9Alb): self
    {
        $this->tpvp9Alb = $tpvp9Alb;

        return $this;
    }

    public function getTpco9Alb(): ?float
    {
        return $this->tpco9Alb;
    }

    public function setTpco9Alb(?float $tpco9Alb): self
    {
        $this->tpco9Alb = $tpco9Alb;

        return $this;
    }

    public function getTpdi9Alb(): ?float
    {
        return $this->tpdi9Alb;
    }

    public function setTpdi9Alb(?float $tpdi9Alb): self
    {
        $this->tpdi9Alb = $tpdi9Alb;

        return $this;
    }

    public function getTpar9Alb(): ?float
    {
        return $this->tpar9Alb;
    }

    public function setTpar9Alb(?float $tpar9Alb): self
    {
        $this->tpar9Alb = $tpar9Alb;

        return $this;
    }

    public function getEle10Alb(): ?string
    {
        return $this->ele10Alb;
    }

    public function setEle10Alb(?string $ele10Alb): self
    {
        $this->ele10Alb = $ele10Alb;

        return $this;
    }

    public function getUni10Alb(): ?float
    {
        return $this->uni10Alb;
    }

    public function setUni10Alb(?float $uni10Alb): self
    {
        $this->uni10Alb = $uni10Alb;

        return $this;
    }

    public function getUnib10Alb(): ?float
    {
        return $this->unib10Alb;
    }

    public function setUnib10Alb(?float $unib10Alb): self
    {
        $this->unib10Alb = $unib10Alb;

        return $this;
    }

    public function getPvp10Alb(): ?float
    {
        return $this->pvp10Alb;
    }

    public function setPvp10Alb(?float $pvp10Alb): self
    {
        $this->pvp10Alb = $pvp10Alb;

        return $this;
    }

    public function getPco10Alb(): ?float
    {
        return $this->pco10Alb;
    }

    public function setPco10Alb(?float $pco10Alb): self
    {
        $this->pco10Alb = $pco10Alb;

        return $this;
    }

    public function getPdi10Alb(): ?float
    {
        return $this->pdi10Alb;
    }

    public function setPdi10Alb(?float $pdi10Alb): self
    {
        $this->pdi10Alb = $pdi10Alb;

        return $this;
    }

    public function getPar10Alb(): ?float
    {
        return $this->par10Alb;
    }

    public function setPar10Alb(?float $par10Alb): self
    {
        $this->par10Alb = $par10Alb;

        return $this;
    }

    public function getTpvp10Alb(): ?float
    {
        return $this->tpvp10Alb;
    }

    public function setTpvp10Alb(?float $tpvp10Alb): self
    {
        $this->tpvp10Alb = $tpvp10Alb;

        return $this;
    }

    public function getTpco10Alb(): ?float
    {
        return $this->tpco10Alb;
    }

    public function setTpco10Alb(?float $tpco10Alb): self
    {
        $this->tpco10Alb = $tpco10Alb;

        return $this;
    }

    public function getTpdi10Alb(): ?float
    {
        return $this->tpdi10Alb;
    }

    public function setTpdi10Alb(?float $tpdi10Alb): self
    {
        $this->tpdi10Alb = $tpdi10Alb;

        return $this;
    }

    public function getTpar10Alb(): ?float
    {
        return $this->tpar10Alb;
    }

    public function setTpar10Alb(?float $tpar10Alb): self
    {
        $this->tpar10Alb = $tpar10Alb;

        return $this;
    }

    public function getFueramenAlb(): ?bool
    {
        return $this->fueramenAlb;
    }

    public function setFueramenAlb(?bool $fueramenAlb): self
    {
        $this->fueramenAlb = $fueramenAlb;

        return $this;
    }

    public function getIfueramenAlb(): ?float
    {
        return $this->ifueramenAlb;
    }

    public function setIfueramenAlb(?float $ifueramenAlb): self
    {
        $this->ifueramenAlb = $ifueramenAlb;

        return $this;
    }

    public function getOfioriAlb(): ?int
    {
        return $this->ofioriAlb;
    }

    public function setOfioriAlb(?int $ofioriAlb): self
    {
        $this->ofioriAlb = $ofioriAlb;

        return $this;
    }

    public function getVerifi2Alb(): ?bool
    {
        return $this->verifi2Alb;
    }

    public function setVerifi2Alb(?bool $verifi2Alb): self
    {
        $this->verifi2Alb = $verifi2Alb;

        return $this;
    }

    public function getIadelantoAlb(): ?float
    {
        return $this->iadelantoAlb;
    }

    public function setIadelantoAlb(?float $iadelantoAlb): self
    {
        $this->iadelantoAlb = $iadelantoAlb;

        return $this;
    }

    public function getZonpreAlb(): ?string
    {
        return $this->zonpreAlb;
    }

    public function setZonpreAlb(?string $zonpreAlb): self
    {
        $this->zonpreAlb = $zonpreAlb;

        return $this;
    }

    public function getConfirmaAlb(): ?float
    {
        return $this->confirmaAlb;
    }

    public function setConfirmaAlb(?float $confirmaAlb): self
    {
        $this->confirmaAlb = $confirmaAlb;

        return $this;
    }

    public function getGestionAlb(): ?float
    {
        return $this->gestionAlb;
    }

    public function setGestionAlb(?float $gestionAlb): self
    {
        $this->gestionAlb = $gestionAlb;

        return $this;
    }

    public function getOficialAlb(): ?float
    {
        return $this->oficialAlb;
    }

    public function setOficialAlb(?float $oficialAlb): self
    {
        $this->oficialAlb = $oficialAlb;

        return $this;
    }

    public function getConmenAlb(): ?float
    {
        return $this->conmenAlb;
    }

    public function setConmenAlb(?float $conmenAlb): self
    {
        $this->conmenAlb = $conmenAlb;

        return $this;
    }

    public function getCondisAlb(): ?float
    {
        return $this->condisAlb;
    }

    public function setCondisAlb(?float $condisAlb): self
    {
        $this->condisAlb = $condisAlb;

        return $this;
    }

    public function getConarrAlb(): ?float
    {
        return $this->conarrAlb;
    }

    public function setConarrAlb(?float $conarrAlb): self
    {
        $this->conarrAlb = $conarrAlb;

        return $this;
    }

    public function getGesmenAlb(): ?float
    {
        return $this->gesmenAlb;
    }

    public function setGesmenAlb(?float $gesmenAlb): self
    {
        $this->gesmenAlb = $gesmenAlb;

        return $this;
    }

    public function getGesdisAlb(): ?float
    {
        return $this->gesdisAlb;
    }

    public function setGesdisAlb(?float $gesdisAlb): self
    {
        $this->gesdisAlb = $gesdisAlb;

        return $this;
    }

    public function getGesarrAlb(): ?float
    {
        return $this->gesarrAlb;
    }

    public function setGesarrAlb(?float $gesarrAlb): self
    {
        $this->gesarrAlb = $gesarrAlb;

        return $this;
    }

    public function getTramenAlb(): ?float
    {
        return $this->tramenAlb;
    }

    public function setTramenAlb(?float $tramenAlb): self
    {
        $this->tramenAlb = $tramenAlb;

        return $this;
    }

    public function getTradisAlb(): ?float
    {
        return $this->tradisAlb;
    }

    public function setTradisAlb(?float $tradisAlb): self
    {
        $this->tradisAlb = $tradisAlb;

        return $this;
    }

    public function getTraarrAlb(): ?float
    {
        return $this->traarrAlb;
    }

    public function setTraarrAlb(?float $traarrAlb): self
    {
        $this->traarrAlb = $traarrAlb;

        return $this;
    }

    public function getFfabcliAlb(): ?string
    {
        return $this->ffabcliAlb;
    }

    public function setFfabcliAlb(?string $ffabcliAlb): self
    {
        $this->ffabcliAlb = $ffabcliAlb;

        return $this;
    }

    public function getFectraAlb(): ?\DateTimeInterface
    {
        return $this->fectraAlb;
    }

    public function setFectraAlb(?\DateTimeInterface $fectraAlb): self
    {
        $this->fectraAlb = $fectraAlb;

        return $this;
    }

    public function getIcarbucliAlb(): ?float
    {
        return $this->icarbucliAlb;
    }

    public function setIcarbucliAlb(?float $icarbucliAlb): self
    {
        $this->icarbucliAlb = $icarbucliAlb;

        return $this;
    }

    public function getIcarbumenAlb(): ?float
    {
        return $this->icarbumenAlb;
    }

    public function setIcarbumenAlb(?float $icarbumenAlb): self
    {
        $this->icarbumenAlb = $icarbumenAlb;

        return $this;
    }

    public function getEle11Alb(): ?string
    {
        return $this->ele11Alb;
    }

    public function setEle11Alb(?string $ele11Alb): self
    {
        $this->ele11Alb = $ele11Alb;

        return $this;
    }

    public function getUni11Alb(): ?float
    {
        return $this->uni11Alb;
    }

    public function setUni11Alb(?float $uni11Alb): self
    {
        $this->uni11Alb = $uni11Alb;

        return $this;
    }

    public function getUnib11Alb(): ?float
    {
        return $this->unib11Alb;
    }

    public function setUnib11Alb(?float $unib11Alb): self
    {
        $this->unib11Alb = $unib11Alb;

        return $this;
    }

    public function getPvp11Alb(): ?float
    {
        return $this->pvp11Alb;
    }

    public function setPvp11Alb(?float $pvp11Alb): self
    {
        $this->pvp11Alb = $pvp11Alb;

        return $this;
    }

    public function getPco11Alb(): ?float
    {
        return $this->pco11Alb;
    }

    public function setPco11Alb(?float $pco11Alb): self
    {
        $this->pco11Alb = $pco11Alb;

        return $this;
    }

    public function getPdi11Alb(): ?float
    {
        return $this->pdi11Alb;
    }

    public function setPdi11Alb(?float $pdi11Alb): self
    {
        $this->pdi11Alb = $pdi11Alb;

        return $this;
    }

    public function getPar11Alb(): ?float
    {
        return $this->par11Alb;
    }

    public function setPar11Alb(?float $par11Alb): self
    {
        $this->par11Alb = $par11Alb;

        return $this;
    }

    public function getTpvp11Alb(): ?float
    {
        return $this->tpvp11Alb;
    }

    public function setTpvp11Alb(?float $tpvp11Alb): self
    {
        $this->tpvp11Alb = $tpvp11Alb;

        return $this;
    }

    public function getTpco11Alb(): ?float
    {
        return $this->tpco11Alb;
    }

    public function setTpco11Alb(?float $tpco11Alb): self
    {
        $this->tpco11Alb = $tpco11Alb;

        return $this;
    }

    public function getTpdi11Alb(): ?float
    {
        return $this->tpdi11Alb;
    }

    public function setTpdi11Alb(?float $tpdi11Alb): self
    {
        $this->tpdi11Alb = $tpdi11Alb;

        return $this;
    }

    public function getTpar11Alb(): ?float
    {
        return $this->tpar11Alb;
    }

    public function setTpar11Alb(?float $tpar11Alb): self
    {
        $this->tpar11Alb = $tpar11Alb;

        return $this;
    }

    public function getEle12Alb(): ?string
    {
        return $this->ele12Alb;
    }

    public function setEle12Alb(?string $ele12Alb): self
    {
        $this->ele12Alb = $ele12Alb;

        return $this;
    }

    public function getUni12Alb(): ?float
    {
        return $this->uni12Alb;
    }

    public function setUni12Alb(?float $uni12Alb): self
    {
        $this->uni12Alb = $uni12Alb;

        return $this;
    }

    public function getUnib12Alb(): ?float
    {
        return $this->unib12Alb;
    }

    public function setUnib12Alb(?float $unib12Alb): self
    {
        $this->unib12Alb = $unib12Alb;

        return $this;
    }

    public function getPvp12Alb(): ?float
    {
        return $this->pvp12Alb;
    }

    public function setPvp12Alb(?float $pvp12Alb): self
    {
        $this->pvp12Alb = $pvp12Alb;

        return $this;
    }

    public function getPco12Alb(): ?float
    {
        return $this->pco12Alb;
    }

    public function setPco12Alb(?float $pco12Alb): self
    {
        $this->pco12Alb = $pco12Alb;

        return $this;
    }

    public function getPdi12Alb(): ?float
    {
        return $this->pdi12Alb;
    }

    public function setPdi12Alb(?float $pdi12Alb): self
    {
        $this->pdi12Alb = $pdi12Alb;

        return $this;
    }

    public function getPar12Alb(): ?float
    {
        return $this->par12Alb;
    }

    public function setPar12Alb(?float $par12Alb): self
    {
        $this->par12Alb = $par12Alb;

        return $this;
    }

    public function getTpvp12Alb(): ?float
    {
        return $this->tpvp12Alb;
    }

    public function setTpvp12Alb(?float $tpvp12Alb): self
    {
        $this->tpvp12Alb = $tpvp12Alb;

        return $this;
    }

    public function getTpco12Alb(): ?float
    {
        return $this->tpco12Alb;
    }

    public function setTpco12Alb(?float $tpco12Alb): self
    {
        $this->tpco12Alb = $tpco12Alb;

        return $this;
    }

    public function getTpdi12Alb(): ?float
    {
        return $this->tpdi12Alb;
    }

    public function setTpdi12Alb(?float $tpdi12Alb): self
    {
        $this->tpdi12Alb = $tpdi12Alb;

        return $this;
    }

    public function getTpar12Alb(): ?float
    {
        return $this->tpar12Alb;
    }

    public function setTpar12Alb(?float $tpar12Alb): self
    {
        $this->tpar12Alb = $tpar12Alb;

        return $this;
    }

    public function getEle13Alb(): ?string
    {
        return $this->ele13Alb;
    }

    public function setEle13Alb(?string $ele13Alb): self
    {
        $this->ele13Alb = $ele13Alb;

        return $this;
    }

    public function getUni13Alb(): ?float
    {
        return $this->uni13Alb;
    }

    public function setUni13Alb(?float $uni13Alb): self
    {
        $this->uni13Alb = $uni13Alb;

        return $this;
    }

    public function getUnib13Alb(): ?float
    {
        return $this->unib13Alb;
    }

    public function setUnib13Alb(?float $unib13Alb): self
    {
        $this->unib13Alb = $unib13Alb;

        return $this;
    }

    public function getPvp13Alb(): ?float
    {
        return $this->pvp13Alb;
    }

    public function setPvp13Alb(?float $pvp13Alb): self
    {
        $this->pvp13Alb = $pvp13Alb;

        return $this;
    }

    public function getPco13Alb(): ?float
    {
        return $this->pco13Alb;
    }

    public function setPco13Alb(?float $pco13Alb): self
    {
        $this->pco13Alb = $pco13Alb;

        return $this;
    }

    public function getPdi13Alb(): ?float
    {
        return $this->pdi13Alb;
    }

    public function setPdi13Alb(?float $pdi13Alb): self
    {
        $this->pdi13Alb = $pdi13Alb;

        return $this;
    }

    public function getPar13Alb(): ?float
    {
        return $this->par13Alb;
    }

    public function setPar13Alb(?float $par13Alb): self
    {
        $this->par13Alb = $par13Alb;

        return $this;
    }

    public function getTpvp13Alb(): ?float
    {
        return $this->tpvp13Alb;
    }

    public function setTpvp13Alb(?float $tpvp13Alb): self
    {
        $this->tpvp13Alb = $tpvp13Alb;

        return $this;
    }

    public function getTpco13Alb(): ?float
    {
        return $this->tpco13Alb;
    }

    public function setTpco13Alb(?float $tpco13Alb): self
    {
        $this->tpco13Alb = $tpco13Alb;

        return $this;
    }

    public function getTpdi13Alb(): ?float
    {
        return $this->tpdi13Alb;
    }

    public function setTpdi13Alb(?float $tpdi13Alb): self
    {
        $this->tpdi13Alb = $tpdi13Alb;

        return $this;
    }

    public function getTpar13Alb(): ?float
    {
        return $this->tpar13Alb;
    }

    public function setTpar13Alb(?float $tpar13Alb): self
    {
        $this->tpar13Alb = $tpar13Alb;

        return $this;
    }

    public function getEle14Alb(): ?string
    {
        return $this->ele14Alb;
    }

    public function setEle14Alb(?string $ele14Alb): self
    {
        $this->ele14Alb = $ele14Alb;

        return $this;
    }

    public function getUni14Alb(): ?float
    {
        return $this->uni14Alb;
    }

    public function setUni14Alb(?float $uni14Alb): self
    {
        $this->uni14Alb = $uni14Alb;

        return $this;
    }

    public function getUnib14Alb(): ?float
    {
        return $this->unib14Alb;
    }

    public function setUnib14Alb(?float $unib14Alb): self
    {
        $this->unib14Alb = $unib14Alb;

        return $this;
    }

    public function getPvp14Alb(): ?float
    {
        return $this->pvp14Alb;
    }

    public function setPvp14Alb(?float $pvp14Alb): self
    {
        $this->pvp14Alb = $pvp14Alb;

        return $this;
    }

    public function getPco14Alb(): ?float
    {
        return $this->pco14Alb;
    }

    public function setPco14Alb(?float $pco14Alb): self
    {
        $this->pco14Alb = $pco14Alb;

        return $this;
    }

    public function getPdi14Alb(): ?float
    {
        return $this->pdi14Alb;
    }

    public function setPdi14Alb(?float $pdi14Alb): self
    {
        $this->pdi14Alb = $pdi14Alb;

        return $this;
    }

    public function getPar14Alb(): ?float
    {
        return $this->par14Alb;
    }

    public function setPar14Alb(?float $par14Alb): self
    {
        $this->par14Alb = $par14Alb;

        return $this;
    }

    public function getTpvp14Alb(): ?float
    {
        return $this->tpvp14Alb;
    }

    public function setTpvp14Alb(?float $tpvp14Alb): self
    {
        $this->tpvp14Alb = $tpvp14Alb;

        return $this;
    }

    public function getTpco14Alb(): ?float
    {
        return $this->tpco14Alb;
    }

    public function setTpco14Alb(?float $tpco14Alb): self
    {
        $this->tpco14Alb = $tpco14Alb;

        return $this;
    }

    public function getTpdi14Alb(): ?float
    {
        return $this->tpdi14Alb;
    }

    public function setTpdi14Alb(?float $tpdi14Alb): self
    {
        $this->tpdi14Alb = $tpdi14Alb;

        return $this;
    }

    public function getTpar14Alb(): ?float
    {
        return $this->tpar14Alb;
    }

    public function setTpar14Alb(?float $tpar14Alb): self
    {
        $this->tpar14Alb = $tpar14Alb;

        return $this;
    }

    public function getEle15Alb(): ?string
    {
        return $this->ele15Alb;
    }

    public function setEle15Alb(?string $ele15Alb): self
    {
        $this->ele15Alb = $ele15Alb;

        return $this;
    }

    public function getUni15Alb(): ?float
    {
        return $this->uni15Alb;
    }

    public function setUni15Alb(?float $uni15Alb): self
    {
        $this->uni15Alb = $uni15Alb;

        return $this;
    }

    public function getUnib15Alb(): ?float
    {
        return $this->unib15Alb;
    }

    public function setUnib15Alb(?float $unib15Alb): self
    {
        $this->unib15Alb = $unib15Alb;

        return $this;
    }

    public function getPvp15Alb(): ?float
    {
        return $this->pvp15Alb;
    }

    public function setPvp15Alb(?float $pvp15Alb): self
    {
        $this->pvp15Alb = $pvp15Alb;

        return $this;
    }

    public function getPco15Alb(): ?float
    {
        return $this->pco15Alb;
    }

    public function setPco15Alb(?float $pco15Alb): self
    {
        $this->pco15Alb = $pco15Alb;

        return $this;
    }

    public function getPdi15Alb(): ?float
    {
        return $this->pdi15Alb;
    }

    public function setPdi15Alb(?float $pdi15Alb): self
    {
        $this->pdi15Alb = $pdi15Alb;

        return $this;
    }

    public function getPar15Alb(): ?float
    {
        return $this->par15Alb;
    }

    public function setPar15Alb(?float $par15Alb): self
    {
        $this->par15Alb = $par15Alb;

        return $this;
    }

    public function getTpvp15Alb(): ?float
    {
        return $this->tpvp15Alb;
    }

    public function setTpvp15Alb(?float $tpvp15Alb): self
    {
        $this->tpvp15Alb = $tpvp15Alb;

        return $this;
    }

    public function getTpco15Alb(): ?float
    {
        return $this->tpco15Alb;
    }

    public function setTpco15Alb(?float $tpco15Alb): self
    {
        $this->tpco15Alb = $tpco15Alb;

        return $this;
    }

    public function getTpdi15Alb(): ?float
    {
        return $this->tpdi15Alb;
    }

    public function setTpdi15Alb(?float $tpdi15Alb): self
    {
        $this->tpdi15Alb = $tpdi15Alb;

        return $this;
    }

    public function getTpar15Alb(): ?float
    {
        return $this->tpar15Alb;
    }

    public function setTpar15Alb(?float $tpar15Alb): self
    {
        $this->tpar15Alb = $tpar15Alb;

        return $this;
    }

    public function getIcobroacuentaAlb(): ?float
    {
        return $this->icobroacuentaAlb;
    }

    public function setIcobroacuentaAlb(?float $icobroacuentaAlb): self
    {
        $this->icobroacuentaAlb = $icobroacuentaAlb;

        return $this;
    }

    public function getNumfacprovAlb(): ?string
    {
        return $this->numfacprovAlb;
    }

    public function setNumfacprovAlb(?string $numfacprovAlb): self
    {
        $this->numfacprovAlb = $numfacprovAlb;

        return $this;
    }

    public function getObsprovAlb(): ?string
    {
        return $this->obsprovAlb;
    }

    public function setObsprovAlb(?string $obsprovAlb): self
    {
        $this->obsprovAlb = $obsprovAlb;

        return $this;
    }

    public function getEstadoprovAlb(): ?string
    {
        return $this->estadoprovAlb;
    }

    public function setEstadoprovAlb(?string $estadoprovAlb): self
    {
        $this->estadoprovAlb = $estadoprovAlb;

        return $this;
    }


}
