<?php
/**
 * Created by PhpStorm.
 * User: redma
 * Date: 15/12/2017
 * Time: 08:48
 */

use \Illuminate\Database\Capsule\Manager as db;

class DBConnection
{
    public static function connecte($file){
        $db = new DB;
        $db->addConnection(parse_ini_file($file));
        $db->setAsGlobal();
        $db->bootEloquent();
    }
}