<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('/about');
    }
    public function news()
    {
        return view('/news');
    }
    public function services()
    {
        return view('/services');
    }
    public function review()
    {
        $reviews = new Contact();
        return view('/review', [
            'reviews'=> $reviews->all()
        ]);
    }
    public function rev(Request $request) {
        $valid = $request->validate([
            'email'=> 'required|min:4|max:30',
            'subject'=> 'required|min:5|max:50',
            'message'=> 'required|min:15|max:500',
        ]);
        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}
