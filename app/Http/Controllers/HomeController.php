<?php

namespace App\Http\Controllers;
use App\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $doctors = Doctor::paginate(9);
        return view('welcome', compact('doctors'));
    }
}
