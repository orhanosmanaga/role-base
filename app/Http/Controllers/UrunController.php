<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UrunModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UrunController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function urunsayfa()
    {   //$urun = UrunModel::find(1);
        $kisi=auth()->user()->name;
        
        $urun = UrunModel::where('satici','=',$kisi)->get();
        //$urun = UrunModel::all();
        return view('urun', array('urun'=> $urun));
    }
}
