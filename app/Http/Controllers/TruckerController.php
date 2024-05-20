<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trucker;
class TruckerController extends Controller
{
    //
    public function index(){
        $truckers = Trucker::orderBy('id','desc')->get();
        return view('truckers.list',compact('truckers'));
    }

    public function create(){
        return view('truckers.create');
    }
    public function store(Request $request){
        $trucker = new Trucker();
        $trucker->dni = $request->dni;
        $trucker->name = $request->name;
        $trucker->phone = $request->phone;
        $trucker->address = $request->address;
        $trucker->email = $request->email;
        $trucker->salary = $request->salary;
        $trucker->population = $request->population;
        $trucker->save();
        return response('Se ha registrado correctamente',200);
    }

    public function show(Trucker $trucker){
        return view('truckers.show',compact('trucker'));
    }

    public function destroy(Trucker $trucker){
        $trucker->delete();
        return redirect()->route('trucker.index');
    }

    public function edit(Trucker $trucker){
        return view('truckers.edit',compact('trucker'));
    }

    public function update(Request $request, Trucker $trucker){
        $trucker->dni = $request->dni;
        $trucker->name = $request->name;
        $trucker->phone = $request->phone;
        $trucker->address = $request->address;
        $trucker->email = $request->email;
        $trucker->salary = $request->salary;
        $trucker->population = $request->population;
        $trucker->save();
        return redirect()->route('trucker.index');
    }
}
