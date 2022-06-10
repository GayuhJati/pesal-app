<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class webController extends Controller
{
    public function detail(Request $request){
        return view('detail');
    }
    public function konten(Request $request){
        return view('konten');
    }
    public function payment(Request $request){
        \Midtrans\Config::$serverKey = 'SB-Mid-server-FcuEQbUnkkiJKeJhfG1AbvVO';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('billing', ['snap_token' => $snapToken]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email',
            'password' =>'required|min:4|max:255'
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        // return request()->all();
        User::create($validateData);

        return redirect('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('konten');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function itemIndex(){
        return view('konten', [
            "items" => Content::all()
        ]);
    }

    public function itemCari($id){
        $item = Content::find($id);
        return view('detail', compact('item','id'));
    }

    public function itemBayar($id){
        $item = Content::find($id);
        return view('billing', compact('item','id'));
    }
}
