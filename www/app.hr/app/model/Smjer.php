<?php

class Smjer
{
    // CRUD operacije

    public static function read()
    {
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
            select * from smjer
            order by naziv asc
        
        ');
        $izraz->execute();
        return $izraz->fetchAll();
    }

}