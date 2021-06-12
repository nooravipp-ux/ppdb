<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function registerMasterList(){
        $dataRegister = Pendaftaran::all();
        return view('Admin.pendaftaran.index', compact('dataRegister'));
    }
    public function saveRegister(Request $req){
        dd($req->all());
    }
}
