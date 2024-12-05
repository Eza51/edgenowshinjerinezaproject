<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    // Show the login form{{-- code by Nowshin Jerin Eza --}}
    public function showLoginForm()
    {
        return view('admin.login');
    }
    

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
    
        $user = User::where('email', $request->email)->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
         //{{-- code by Nowshin Jerin Eza --}}
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }
    
        return back()->with('error', 'Invalid credentials.');
    }
    

    // Handle logout logic{{-- code by Nowshin Jerin Eza --}}
    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login.form');
    }
  //{{-- code by Nowshin Jerin Eza --}}
    public function showReservations()
    {
        $reservations = Reservation::paginate(10); // Change 10 to the number of reservations per page
        return view('admin.reservation', compact('reservations'));
    }

 
    public function deleteReservation($id)
    {
        $reservation = Reservation::find($id);

        if ($reservation) {
            $reservation->delete();
            return redirect()->route('admin.reservations')->with('success', 'Reservation deleted successfully.');
        }

        return back()->with('error', 'Reservation not found.');
    }
}
//{{-- code by Nowshin Jerin Eza --}}