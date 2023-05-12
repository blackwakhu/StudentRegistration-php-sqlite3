<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MyDb
 *
 * @author derrickws
 */
class MyDb extends SQLite3 {
    //put your code here
    function __construct() {
        $this->open("../database/register.db");
    }
}
