<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KlantController extends Controller
{
    //
    public function index()
    {
        return view('klanten', [
            "page_title" => 'Klanten',
            'klanten' => Client::latest()->paginate(20)
        ]);
    }
    public function add(Request $r)
    {

        $klant = new Client();
        $klant->title = $r->title;
        $klant->firstName = $r->firstName;
        $klant->lastName = $r->lastName;
        $klant->email = $r->email;
        $klant->street = $r->street;
        $klant->zip = $r->zip;
        $klant->city = $r->city;
        $klant->province = $r->province;

        $klant->save();

        return redirect("/klanten");

    }
    public function getData(Request $r, $id){
        return view('bewerkKlant', [
            "page_title" => 'Bewerk Klant',
            'klant' => Client::where('id' , $id)->firstOrFail()
        ]);
    }
    public function bewerk(Request $r, $id){
        $klant = Client::where('id', $id)->firstOrFail();
        $klant->title = $r->title;
        $klant->firstName = $r->firstName;
        $klant->lastName = $r->lastName;
        $klant->email = $r->email;
        $klant->street = $r->street;
        $klant->zip = $r->zip;
        $klant->city = $r->city;
        $klant->province = $r->province;

        $klant->save();

        return redirect("/klanten");

    }
}
