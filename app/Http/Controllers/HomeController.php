<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Role::create(['name' => 'Admin']);
        //Permission::create(['name' => 'ekleme']);

        //auth()->user()->givePermissionTo('ekleme');
        //auth()->user()->assignRole('Admin');
        return view('home');
    }
    public function rololustur()
    {
        /*
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Yonetici']);
        Role::create(['name' => 'Satici']);
        Permission::create(['name' => 'ekleme']);
        Permission::create(['name' => 'silme']);
        Permission::create(['name' => 'duzenleme']);
        return "oluştu";
        */

        //auth()->user()->givePermissionTo('ekleme');
        //auth()->user()->assignRole('Admin');
        return "oluştu";
    }
    
    public function adminyap()
    {   
        //auth()->user()->assignRole('Admin');
        //auth()->user()->givePermissionTo('ekleme','silme','duzenleme');
        return "admin oldun";
    }
    public function yoneticiyap()
    {   
        //auth()->user()->assignRole('Yonetici');
        //auth()->user()->givePermissionTo('silme','duzenleme');
        return "yonetici oldun";
    }
    public function saticiyap()
    {   
        //auth()->user()->assignRole('Satici');
        //auth()->user()->givePermissionTo('ekleme','duzenleme');
        return "satici oldun";
    }
}
