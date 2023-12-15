<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

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
        $service = Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'hotness' => $request->hotness
        ]);

        if($request->hasFile('image')){
            $random_string = Crypt::encryptString(rand(10000, 99999));
            $image_path = "/service/$service->id/" . $random_string . "." . $request->image->getClientOriginalExtension();
            Storage::disk('public')->put($image_path, file_get_contents($request->image));
            $image_url = Storage::disk('public')->url($image_path);
        }

        $service->update([
            'image_path' => $image_url,
        ]);

       return redirect()->route('services.page');
    }
}
