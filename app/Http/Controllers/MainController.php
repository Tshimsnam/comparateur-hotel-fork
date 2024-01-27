<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        // $chambres=Chambre::all();
        $hotels=Hotel::paginate(6);
        // dd($hotels[0]->chambre);
        return view('welcome',compact('hotels'));
    }
}
