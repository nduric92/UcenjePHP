<?php

class IndexController extends Controller
{

    // kasnije ćemo staviti konstruktor

    public function index()
    {
        // $c = new Controller();   Cannot instantiate abstract class Controller
        $this->view->render('index',[
            'iznos'=>12,
            'podaci'=>[
                2,4,5,6,15,4,4
            ]
        ]);
    }


    public function kontakt()
    {
        $this->view->render('kontakt');//ukoliko se izmeni sadrzaj unutar zagrade pod navodnicima ucitava errorDatoteku
        
    }

    
    public function api()
    {
        $this->view->api([
            'podaci'=>[
                'id'=>2,
                'osoba'=>[
                    'ime'=>'Pero',
                    'prezime'=>'Perić'
                ]
            ]
        ]);
        
    }




}