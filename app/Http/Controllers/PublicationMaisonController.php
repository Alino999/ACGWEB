<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicationMaison;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class PublicationMaisonController extends Controller
{
    public function index () {
        return view('frontend.dasboard.publication-maison');
    }

    public function store(Request $request){
        
        $data=request()->validate([
            'titre'     => ['required'] ,
            'quartier'=>  ['required'] ,
            'ville'=> ['required'] ,
            'societe'=> ['required'] ,
            'description'=> ['required'] ,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
        //   $name = $request->file('file')->getClientOriginalName();
 
        //   $path = $request->file('file')->store('public/files');
   
            $publication = new PublicationMaison();
            $path = null;
            if ($request->image) {
                // $path = $request->image->store('image');
                $path = $request->file('image')->store('public/files');
            }
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $name = $timestamp . '-' . $file->getClientOriginalName();
                $photoPath = request('image')->storeAs('image', $name, 'public');
                $publication->image = $photoPath;
            }
          $publication -> titre = $data['titre'];
          $publication -> quartier = $data['quartier'];
          $publication -> ville = $data['ville'];
          $publication -> societe = $data['societe'];
          $publication -> description = $data['description'];
          var_dump($data);

          $publication -> save();

        // $publication->name = $name;
        // $publication->path = $path;
          return redirect()->back();
    }
}
