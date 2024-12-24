<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.pages.contact');
    }

    public function contactPost(Request $request){

        //form kontrol 
        $request->validate([
            'email' => "email:rfc,dns",
            'name' => "required|min:3|max:30",
            'phone' => "required|min:10",
            'topic' => "required",
            'message' => "required|max:100",
        ]);

        //kontolden gecerse tabloya kayıt at
        $contact = Contact::create([
            'email' =>  $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'topic' => $request->topic,
            'message' => $request->message
        ]);

        //contact routena geri don basarı mesajı ile
        return redirect()->route('contact')->with('success' , 'Başarılı bir şekilde iletildi. Teşekkürler');
    }
}