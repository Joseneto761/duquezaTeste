<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index(){
        $services = Service::all();

        return view('services.index')->with(['services' => $services]);
    }
    public function create(){
        return view('services.create');
    }

    public function store(Request $request){
        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'hotness' => $request->hotness
        ]);

       return redirect()->route('services.page');
    }
}
