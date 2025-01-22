<?php

namespace App\Http\Controllers;

use App\Models\contactInfo;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class ContactInfoController extends Controller
{
    public function storeContactInfo(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => 'required|max:255|min:2',
            'last_name' => 'required|max:255|min:2',
            'company' => 'required|max:255|min:2',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);

        $contactInfo = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'company' => $validated['company'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
        ];

        contactInfo::create($contactInfo);

        return back()->with('success', 'Thank you for contacting us!');
    }
}
