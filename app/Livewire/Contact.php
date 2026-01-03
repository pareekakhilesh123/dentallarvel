<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Contact extends Component
{
    public $name, $email, $phone, $message;

    protected $rules = [
        'name'    => 'required|min:3',
        'email'   => 'required|email',
        'phone'   => 'required|digits:10',
        'message' => 'required|min:5',
    ];

    public function submitContact()
    {
        $this->validate();

        $response = Http::asJson()->post(
            'https://script.google.com/macros/s/AKfycbzRXfvzUG9HcFNFrlxsybwJlTUTEW3jj_TfFK4twTB6HAYnAHUEKmpAv--gMLS9ZZRwTw/exec',
            [
                'type'    => 'contact',   // ✅ THIS LINE WAS MISSING / WRONG
                'name'    => $this->name,
                'email'   => $this->email,
                'phone'   => $this->phone,
                'message' => $this->message,
            ]
        );

        $result = $response->json();

        if ($result['status'] !== 'success') {
            session()->flash('error', $result['message'] ?? 'Something went wrong');
            return;
        }

        session()->flash('success', 'Message sent successfully!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact')->layout('layouts.header');
    }
}
