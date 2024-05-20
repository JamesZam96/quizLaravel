<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    //

    public function index(){
        $trucks = Truck::orderBy('id','desc')->get();
        return view('trucks.list',compact('trucks'));
    }

    public function create(){
        return view('trucks.create');
    }
    public function store(Request $request){
        $truck = new Truck();
        $truck->power = $request->power;
        $truck->plate = $request->plate;
        $truck->model = $request->model; // destinatario
        $truck->type = $request->type;
        $truck->save();
        return response('Se ha registrado correctamente',200);
    }

    public function show(Truck $truck){
        return view('trucks.show',compact('truck'));
    }

    public function destroy(Truck $truck){
        $truck->delete();
        return redirect()->route('truck.index');
    }

    public function edit(Truck $truck){
        return view('trucks.edit',compact('truck'));
    }

    public function update(Request $request, Truck $truck){
        $truck->power = $request->power;
        $truck->plate = $request->plate;
        $truck->model = $request->model; // destinatario
        $truck->type = $request->type;
        $truck->save();
        return redirect()->route('truck.index');
    }
}
