<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* use Illuminate\Database\Eloquent\Collection; */
use App\Models\Contact;
class contactController extends Controller
{
    public function index1(){

        //to find the data
    /*     $contacts = Contact::findOrFail(1); */
/*     $contacts = new Contact();
    $contacts->name='Sahil';
    $contacts->email= 'sahil@gmail.com';
    $contacts->Message='Hello its me sahil.';
    $contacts->save(); */
    /* Contact::create([
            'name'=> 'Saran',
            'email'=> 'saran@gmail.com',
            'Message'=> ' Hello this is saran12'
        ]); */
    $contacts = Contact::all();
    // dd($contacts);

        // $collection = collect(
        //     [1,2,3,4,5,6,7,8,9,10]
        // );
        return view("contact",compact('contacts'));
    }
    public function store(Request $request){
        // dd($request);
}
}
