<?php

namespace App\Http\Controllers;

use App\Models\contactInfo;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function show(): View|Factory|Application
    {
        $contacts = contactInfo::paginate(20);

        return view('contactinfo.contactInfo', compact('contacts'));
    }

    public function storeContactInfo(Request $request): RedirectResponse
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

    public function delete($id): RedirectResponse
    {
        $contactInfo = contactInfo::findOrFail($id);

        $contactInfo->delete();

        return redirect()->intended(route('contact_info', absolute: false));
    }
}
