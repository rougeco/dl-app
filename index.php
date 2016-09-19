<?php
require_once "vendor/autoload.php";

echo 'salut les gens';


// src/Product.php
/**
 * @Entity @Table(name="products")
 **/
class Product
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id_product;
    /** @Column(type="string") **/