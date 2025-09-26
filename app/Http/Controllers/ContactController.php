<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $adminEmail = env('ADMIN_EMAIL');

        Mail::raw("Message de {$validated['name']} ({$validated['email']}):\n\n{$validated['message']}", function ($message) use ($adminEmail) {
            $message->to($adminEmail)
                    ->subject('Nouveau message depuis le formulaire de contact');
        });

        return back()->with('success', 'Message envoyé avec succès !');
    }
}
