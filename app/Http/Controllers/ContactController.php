<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.casaroyal.contact-us');
    }

    public function store(Request $request){
        $data=request()->validate([
            'name'     => ['required'] ,
            'phone'=>  ['required'] ,
            'email'=> ['required'] ,
            'message'=> ['required']
          ]);
        //   $Contact = new Contact();
        //   $Contact -> name = $data['name'];
        //   $Contact -> phone = $data['phone'];
        //   $Contact -> email = $data['email'];
        //   $Contact -> message = $data['message'];

        //   $Contact -> save();
        Contact::create($request->all());
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'user_query' => $request->get('message'),
        ),
        function($message) use ($request){
            $message->from($request->email);
            $message->to('alainguigma99@gmail.com', 'Admin')->subject($request->get('nama'));
        });
          return redirect()->back();
    }
}
