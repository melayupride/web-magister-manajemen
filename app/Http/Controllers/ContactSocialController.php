<?php

namespace App\Http\Controllers;

use App\Models\ContactSocial;
use Illuminate\Http\Request;

class ContactSocialController extends Controller
{
    public function index()
    {
        $contactSocial = ContactSocial::first();
        $menuKontak = 'active';
        
        return view('dashboard.contact.index', compact('contactSocial', 'menuKontak'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'link_ig' => 'nullable|url',
            'link_fb' => 'nullable|url',
            'link_x' => 'nullable|url',
            'link_linkedin' => 'nullable|url',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'fax' => 'nullable|string',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
        ]);

        ContactSocial::create($validated);

        return redirect()->route('contact-socials.index')
            ->with('success', 'Contact & Social created successfully.');
    }

    public function update(Request $request, ContactSocial $contactSocial)
    {
        $validated = $request->validate([
            'link_ig' => 'nullable|url',
            'link_fb' => 'nullable|url',
            'link_x' => 'nullable|url',
            'link_linkedin' => 'nullable|url',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'fax' => 'nullable|string',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
        ]);

        $contactSocial->update($validated);

        return redirect()->route('contact-socials.index')
            ->with('success', 'Contact & Social updated successfully.');
    }

    public function destroy(ContactSocial $contactSocial)
    {
        $contactSocial->delete();

        return redirect()->route('contact-socials.index')
            ->with('success', 'Contact & Social deleted successfully.');
    }
}