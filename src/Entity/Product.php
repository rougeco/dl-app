<?php
/**
 * Created by PhpStorm.
 * User: Hoel
 * Date: 17/09/2016
 * Time: 16:37
 */

namespace Entity;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

// src/Product.php

class Product
{

    protected $id_product;
    protected $nom;
    protected $dsc;
    protected $compo;
    protected $sheet;
    protected $reference;
    protected $image;
    protected $category;

    public function __construct()
    {
    }

}