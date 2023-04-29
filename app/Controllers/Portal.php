<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\MenuHomeModel;

class Portal extends BaseController
{
    //private $menuHomeModel;

    public function __construct(){
        helper(['url', 'form']);
        //$this->menuHomeModel = new MenuHomeModel();
    }

    public function index(){
        return view('portal/home', [
            //'menu_portal' => $menu_portal, //Calcula antes o Menu
        ]);
    }

    public function logout(){
        //logout de usuario
    }

}
