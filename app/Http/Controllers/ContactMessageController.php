<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function sendContactMessage(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required'
        ]);
    
        // Guardar el mensaje en la base de datos
        ContactMessage::create($request->only(['email', 'message']));
    
        // Redirigir después del envío
        return redirect()->route('contact.form')->with('success', 'Mensaje enviado y almacenado con éxito.');
    }
    
}
