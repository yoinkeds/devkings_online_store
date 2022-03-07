<?php

class Config{

    //  Defining Globlas setting for:
    //  Database, User session, Remember users
    protected $path;
    public static function getConfig($path = null){
        // checing if path is set, 
        if($path){
            // setting the path to items of the global config's arrray
            $config = $GLOBALS['config'];
            // getting items from the path with are infront of the forward slashes
            $path = explode('/', $path);
            foreach($path as $peice){
                if(isset($config[$peice])){
                    $config = $config[$peice];
                }
            }
            return $config;
        }
        return false;
    }
}

