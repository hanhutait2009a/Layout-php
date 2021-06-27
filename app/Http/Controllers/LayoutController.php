<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function layoutController(){
        return view('layout');
    }
    public function Index(){
        return view('index');
    }
    public function List(){
        return view('list');
    }
    public function Form(){
        return view('form');
    }
    public function Calendar(){
        return view('calendar');
    }
    public function Ui(){
        return view('ui-elements-modals');
    }
}
