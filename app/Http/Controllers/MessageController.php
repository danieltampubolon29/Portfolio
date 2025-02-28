<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }

    public function store(Request $request)
{
    // Validasi data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'phone_number' => 'required|string|max:255',
        'email_subject' => 'required|string|max:255',
        'message' => 'required|string', // Pastikan nama kolom sesuai dengan database
    ]);

    try {
        Message::create($validatedData);
        return response()->json(['success' => 'Your message was sent successfully!']);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to send your message. Please try again.'], 500);
    }
}
}
