<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\category;
use App\Product;

class ProductConteroller extends Controller
{
    public function index(){ 
        return view('backend.dashboard.landlord.addroomsdetails');
    }

    public function create(Request  $request){
        $data = [
         'address' =>$request->address,
         'category_id' =>$request->category_id,
         'price' =>$request->price,
         'rooms' =>$request->rooms,
         'halls' =>$request->halls,
         'kitchen' =>$request->kitchen,
         'bathroom' =>$request->bathroom,
         'phone' =>$request->phone,
         'status' =>$request->status,
     ];
     Product::insert($data);
     return redirect()->back();
 }
}