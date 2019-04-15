<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.02.19
 * Time: 7:26
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{

    public function index(){
        return view('home');
    }
}