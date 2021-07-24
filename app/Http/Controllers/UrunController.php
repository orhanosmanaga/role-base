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

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function urunsayfa()
    {   //$urun = UrunModel::find(1);
        
        if(auth()->user()->role('Admin'))

        {$kisi=auth()->user()->name;
            $urun = UrunModel::where('satici','=',$kisi)->get();}
        else{
            $urun = UrunModel::all();
            
        }
        
       

        
        
        return view('urun', array('urun'=> $urun));
    }

    public function urunolustur(Request $request)
    {   
       $veri=$request->validate(
        [
            'ukod'=>'required|integer',
            'uad'=>'required|string',
            'uresim'=>'required|string',
            'ufiyat'=>'required|integer',
            'uadet'=>'required|integer',
            
            


        ]



       );
       $kisi=auth()->user()->name;
       $urun=new UrunModel();
       $urun->ukod=$request->ukod;
       $urun->uad=$request->uad;
       $urun->uresim=$request->uresim;
       $urun->ufiyat=$request->ufiyat;
       $urun->uadet=$request->uadet;
       $urun->satici=$kisi;
       $urun->save();
       return back();
    }
}
