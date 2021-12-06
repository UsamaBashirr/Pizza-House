<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class pizzaController extends Controller
{
    public function index()
    {
        //Showing All records
        $pitza = Pizza::all();
        //$pitza = Pizza::where('name','Achari')->get();
        //$pitza = Pizza::orderBy('name','desc')->get();
        return view('index', ['pizza'=>$pitza]);
    }
    public function create()
    {
        return view('create');
    }
    public function store()
    {
        
        $Pizza = new Pizza();
        $Pizza->name=request('name');
        $Pizza->type=request('type');
        $Pizza->base=request('base');
        $Pizza->toppings=request('toppings');
        $Pizza->save();

        return redirect('/')->with('msg','Data updated successfully');
    }
    public function show($id)
    {
        //Getting a single record
        $pitza = Pizza::findOrFail($id);
        return view('show',['show'=>$pitza]);
    }

    public function destroy($id)
    {
        //Getting a single record
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/p');
    }
}
