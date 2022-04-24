<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Reservation;
use App\Models\Room;
use DateTime;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservaties', [
            "page_title" => 'Reservaties',
            'reservaties' => Reservation::latest()->paginate(20),
        ]);
    }
    //
    public function book(Request $r)
    {
        $idAndPrice = explode ("-", $r->room_id);
        $room_id = $idAndPrice[0];
        $price = $idAndPrice[1];

        $date1 = new DateTime($r->startdate);
        $date2 = new DateTime($r->enddate);
        $days  = $date2->diff($date1)->format('%a');
        $price = $price * $days;

        $item = new Reservation();
        $item->client_id = $r->client_id;
        $item->room_id = $room_id;
        $item->start_date = $date1;
        $item->end_date = $date2;
        $item->remarks = $r->remarks;
        $item->price = $price;

        $item->save();

        $room = Room::where('id', $room_id)->firstOrFail();
        $room->available = 0;
        $room->save();

        return redirect("/klanten");

    }

    public function deleteReservation(Request $r, $id){

        $reservation = Reservation::where('id' , $id);

        $reservation->delete();

        return redirect()->back();

    }
}
