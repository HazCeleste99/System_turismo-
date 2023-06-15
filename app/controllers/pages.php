<?php

class Pages extends Controller
{

    public function index()
    {
        $data = [
             'tituloPagina' => 'Pagina Inicial'
        ];
        $this->view('pages/home', $data);
    }

    public function info(){
        $data =[
            'tituloPagina' => 'informacion'
        ];
        $this->view('pages/info', $data);
    }


    
}