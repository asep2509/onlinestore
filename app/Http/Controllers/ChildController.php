<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
* Using Model in Here
*/
use App\User;

class ChildController extends Controller
{
    /**
    * Constructor
    */
    public function __construct(){

    }

    /**
    * Index ChildPages
    */
    public function index(){
      $DataUsers = new User();
      $DataProducts = DB::table('tbl_product')
                ->orderBy('name', 'desc')
                ->get();
      $DataProduct = DB::table('tbl_product')
                  ->join('tbl_product_categories', 'tbl_product.categories', '=', 'tbl_product_categories.id')
                  ->select('tbl_product.*', 'tbl_product_categories.name AS cat_name')
                  ->limit(8)
                  ->get();
      $ContentIndex = array(
        'title' => 'Jual Beli Aman Cepat dan Terpercaya | Mukatoko',
        'desc'  => 'Halaman anak dari sistem informasi Keluarga',
        'content' => $DataUsers->get()
      );
      return view('child_parent', $ContentIndex, compact('DataProduct'));
    }
}
