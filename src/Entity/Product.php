<?php
/**
 * Created by PhpStorm.
 * User: Hoel
 * Date: 17/09/2016
 * Time: 16:37
 */

namespace Entity;


// src/Product.php
/**
 * @Entity @Table(name="products")
 **/
class Product
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $name;
}