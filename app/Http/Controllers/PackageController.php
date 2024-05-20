<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\Trucker;

class PackageController extends Controller
{

    public function index(){
        $packages = Package::orderBy('id','desc')->get();
        return view('packagesc.list',compact('packages'));
    }

    public function create(){
        $packages = Package::all();
        $truckers = Trucker::all();
        return view('packagesc.create',compact('truckers','packages'));
    }
    public function store(Request $request){
        $package = new Package();
        $package->code = $request->code;
        $package->description = $request->description;
        $package->addressee = $request->addressee; // destinatario
        $package->addressPackage = $request->addressPackage;
        $package->trucker_id = $request->trucker_id;
        $package->save();
        return response('Se ha registrado correctamente',200);
    }

    public function show(Package $package){
        return view('packagesc.show',compact('package'));
    }

    public function destroy(Package $package){
        $package->delete();
        return redirect()->route('package.index');
    }

    public function edit(Package $package, Trucker $trucker){
        return view('packagesc.edit',compact('package','trucker'));
    }

    public function update(Request $request, Package $package){
        $package->code = $request->code;
        $package->description = $request->description;
        $package->addressee = $request->addressee; // destinatario
        $package->addressPackage = $request->address;
        $package->trucker_id = $request->trucker_id;
        $package->save();
        return redirect()->route('package.index');
    }
}
