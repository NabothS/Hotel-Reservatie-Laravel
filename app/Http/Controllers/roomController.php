<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Room;
use Illuminate\Http\Request;

class roomController extends Controller
{
    //
    public function getRooms(Request $r, $id)
    {
        return view('bookRoom', [
            "page_title" => 'Book Room',
            'client' => Client::where('id' , $id)->firstOrFail(),
            'rooms' => Room::all()->sortBy('number')
        ]);
    }
}
