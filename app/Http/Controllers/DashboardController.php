<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
    * Constructor fo controller
    */
    public function __construct()
    {
    }

    /**
    * Dashboard Index Content
    */
    public function index(){
      /**
      * Data Desktop Content array rendering for view
      */
      $DekstopContent = array(
        'title'   => 'Sistem Informasi Keluarga',
        'desc'    => 'Sistem Informasi Keluarga',
        'og:img'  => 'https://www.edukasimedia.com/images/upload/by/id/1/asep/homescreen.png',
        'og:type' => 'WebPages'
      );
      return view('homepage',$DekstopContent);
    }

}
