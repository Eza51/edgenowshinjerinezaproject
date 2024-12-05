<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Reservation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $foods = Food::all(); // or use paginate if needed{{-- code by Nowshin Jerin Eza --}}
        
        return view('front-end.home', compact('foods'));  // Pass foods to the view
    }
    public function about(){
        return view('front-end.about');
    }

    public function reservation (){
        return view ('front-end.reservation');
    }
    // Add this method to the HomeController{{-- code by Nowshin Jerin Eza --}}


public function storeReservation(Request $request)
{
    // Validate the incoming datause {{-- code by Nowshin Jerin Eza --}}
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'reservation_date' => 'required|date',
        'message' => 'nullable|string',
    ]);

    // Create a new reservation record
    Reservation::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'reservation_date' => $request->reservation_date,
        'message' => $request->message,
    ]);

    // Redirect back with a success message{{-- code by Nowshin Jerin Eza --}}
    return redirect()->route('reservation')->with('success', 'Your reservation has been made successfully!');
}

}
