<?php

class View
{

    private $predlozak;

    public function __construct($predlozak='predlozak')
    {
        $this->predlozak=$predlozak;
    }

    
    public function render($phtmlStranica,$parametri=[]) //na koju stranicu se salje koji parametar
    {
        $viewDatoteka = BP_APP . 'view' . //prvo ucitava base path APP pa u njemu view 
        DIRECTORY_SEPARATOR . $phtmlStranica . '.phtml'; //pa odvaja direktorij separatorom nakon toga index .phtml
        
        ob_start(); //ova funkcija gde mu govorimo 'nemoj to slati klijentu' nego zovi funkciju extract
        extract($parametri);//parametri su asocijativni niz(kljuc arrey, kljuc array) i on od kljuca ereja napravi varijablu i vrednost kljuca stavlja pod varijablu
        if(file_exists($viewDatoteka)) //ako postoji ova datoteka..
        {
            include_once $viewDatoteka; //ucitavamo datoteku
        }else{
            include_once BP_APP . 'view' . //ako ne postoji - 
            DIRECTORY_SEPARATOR . 'errorViewDatoteka.phtml'; //ucitava errorDatoteku
        }
        $sadrzaj=ob_get_clean();    //nakon ucitavanja jedne ili druge datoteke if-a --sve sa kesa salje u varijablu sadrzaj
        include_once BP_APP . 'view' . DIRECTORY_SEPARATOR
        . $this->predlozak . '.phtml'; //ova funckija vraca seve kesirano i salje je u sadrzaj pa se uglavljuje u predlozak
    }


    public function api($parametri)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($parametri);
    }

}