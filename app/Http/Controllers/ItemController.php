<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Hotel;
use App\Models\House;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('landingpage',["most_main"=>Item::find(1),"most2"=>Item::find(2),"most3"=>Item::find(3),"most3"=>Item::find(3),"most4"=>Item::find(4),"most5"=>Item::find(5),"house"=>House::all(),"apartment"=>Apartment::all(),"hotel"=>Hotel::all()
        ]);
    }

    public function show(Item $item){
        return view('detail',["title"=>"post","item"=>$item]);
    }
    public function showhouse(House $item){
        return view('detail-house',["title"=>"post","item"=>$item]);
    }
    
    public function showhotel(Hotel $hotel){
        return view('detail',["title"=>"post","item"=>$hotel]);
    }
}
