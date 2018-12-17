<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheaterSeats as Seats;

class TheaterSeatsController extends Controller
{

    public function getSeats(){
        $seats = Seats::all();
        return response($seats);
    }

    public function getSeatById($id){
        $detail = Seats::find($id);
        return response($detail);
    }

    public function bronPlace(Request $request){
        if ($request->filled('id')) {
            $detail = Seats::find($request->id);

            if (!empty($detail)) {
                $detail->active = '1';
                if ($detail->save()) {
                    return response($detail);
                }
            }
        }
        return response()->json(['error' => 'failed']);
    }

    public function removeBron(Request $request){
        if ($request->filled('id')) {
            $detail = Seats::find($request->id);
            if (!empty($detail)) {
                $detail->active = '0';
                if ($detail->save()) {
                    return response($detail);
                }
            }
        }
        return response()->json(['error' => 'failed']);
    }
    public function resetBron(Request $request){
        if (!empty($request->all())) {
            foreach ($request->all() as $req){
                $detail = Seats::find($req);
                if (!empty($detail)) {
                    $detail->active = '0';
                    $detail->save();
                }
            }
        }
        return response()->json(['success' => 'bron has been reset']);
    }

    public function bookPlace(Request $request){
        if (!empty($request->all())) {
            foreach ($request->all() as $id) {
                $detail = Seats::find($id);
                if (!empty($detail)) {
                    $detail->active = '0';
                    $detail->booked = '1';
                    $detail->save();
                }
            }
        }
        return response()->json(['success' => 'success']);
    }
}
