<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

class AdminController extends Controller
{
    public function index(){
        $participants_count = Participant::count();
        $participants = Participant::all();
        return view('admin.index', compact('participants', 'participants_count'));
    }
}
