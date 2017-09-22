<?php
namespace App\Http\Controllers;

use App\Http\Requests;

class HomeController extends Controller
{
    public function store()
    {
        $input = Input::all();
        return $input['title'];
    }
}