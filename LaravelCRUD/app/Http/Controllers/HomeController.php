<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Lấy model của userCRUD
use App\Models\userCRUD;

class HomeController extends Controller
{
    public function getAllUser()
    {
        $users = userCRUD::all();
        return view('home', compact('users')); //truyền biến users vào home
    }
}