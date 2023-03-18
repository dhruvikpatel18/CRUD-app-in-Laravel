<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class mycontroller extends Controller
{
    //
    function insert(Request $req){
       $name= $req->get('pname');
       $price= $req->get('pprice');
       $piamge= $req->file('image')->getClientOriginalName();
       //move uploded file
       $req->image->move(public_path('images'), $piamge);

       $prod = new product();
       $prod -> PName = $name;
       $prod -> PPrice = $price;
       $prod -> PImage = $piamge;
       $prod->save();
       return redirect('/');
    }
    function readdata(){
        $pdata = product::all();
        return view('insertRead' , ['data' => $pdata]);
    }

    function updateordelete(Request $req){
        $id = $req->get('id');
        $name = $req->get('name');
        $price = $req->get('price');

        if($req->get('update') == 'Update'){
             return view('updateview' , ['id'=>$id , 'pname'=>$name, 'pprice' => $price ]);
        }else{
            $prod = product::find($id);
            $prod->delete();
        }
        return redirect('/');
    }
    function update(Request $req){
        $Id = $req->get('id');
        $Name = $req->get('name');
        $Price = $req->get('price');
        $prod = product::find($Id);
        $prod->PName = $Name;
        $prod->PPrice = $Price;
        $prod->save();
        return redirect('/');
    }
}
