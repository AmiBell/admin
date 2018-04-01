<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembreController extends Controller
{
     public function addMembre(){
     	return view('admin.membres.add_membre');
     }


 }
