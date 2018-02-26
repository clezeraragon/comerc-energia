<?php
/**
 * Created by PhpStorm.
 * User: toboymoney
 * Date: 24/02/2018
 * Time: 20:47
 */

namespace ComercEnergia\Util;


class Util
{
    public  static function formatMoeda($data)
    {
        return str_replace('.','',$data);
    }
    public static function formatViewValor($number)
    {
        return number_format($number, 0, ',', '.');
    }
}