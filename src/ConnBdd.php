<?php

class ConnBdd {
    public static function getPdo(){
        return new PDO('mysql:host=192.168.1.60; dbname=bimber;charset=utf8', 'root','root');
    }
}