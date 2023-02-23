<?php

class IndexController{

    // kasnije ćemo staviti konstruktor

    public function index()
    {
        $view = new View();     //predlozak je na View postavljen lokalno
        $view->render('index'); //sad se na klasi view poziva metodu render
    }


    public function ruta1()
    {
        $view = new View();    
        $view->render('primjer1');
    }





}