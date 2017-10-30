<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
  
  /**
  * Index Homepage
  */
  public function index(){
    //Fetching product
    $DataProduct = DB::table('tbl_product')
                ->join('tbl_product_categories', 'tbl_product.categories', '=', 'tbl_product_categories.id')
                ->select('tbl_product.*', 'tbl_product_categories.cat_name AS cat_name')
                ->limit(8)
                ->get();
    //Fetching categories
    $DataCategory = DB::table('tbl_product_categories')->get();
    //Render content
    $ContentIndex = array(
      'title' => 'Jual Beli Aman Cepat dan Terpercaya | Mukastore'
    );
    return view('child_parent', $ContentIndex, compact('DataProduct', 'DataCategory'));
  }

  /**
  * Index Homepage
  */
  public function product(){
    //Fetching product
    $DataProduct = DB::table('tbl_product')
                ->limit(8)
                ->get();
    //Fetching categories
    $DataCategory = DB::table('tbl_product_categories')->get();
    //Render content
    $ContentIndex = array(
      'title' => 'Jual Beli Aman Cepat dan Terpercaya | Mukatoko'
    );
    return view('product_list', $ContentIndex, compact('DataProduct', 'DataCategory'));
  }
}
