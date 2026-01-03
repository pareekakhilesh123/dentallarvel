<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminBookingMail;
use App\Mail\UserBookingMail;
 


class Booking extends Component
{
    public $service, $date, $time, $name, $email, $phone, $message;

    // ✅ Validation Rules
    protected $rules = [
        'service' => 'required|string',
        'date'    => 'required|date|after_or_equal:today',
        'time'    => 'required|string',
        'name'    => 'required|min:3',
        'email'   => 'required|email',
        'phone'   => 'required|digits:10',
        'message' => 'nullable|max:500',
    ];

    // ✅ Custom Messages (optional but professional)
    protected $messages = [
        'service.required' => 'Please select a service',
        'date.required'    => 'Please select appointment date',
        'date.after_or_equal' => 'Date cannot be in the past',
        'time.required'    => 'Please select time',
        'name.required'    => 'Name is required',
        'name.min'         => 'Name must be at least 3 characters',
        'email.required'  => 'Email is required',
        'email.email'     => 'Enter a valid email',
        'phone.required'  => 'Phone number is required',
        'phone.digits'    => 'Phone must be 10 digits',
    ];

public function submitBooking()
{
    $this->validate();

    $data = [
          'type'    => 'booking',
        'service' => $this->service,
        'date'    => $this->date,
        'time'    => $this->time,
        'name'    => $this->name,
        'email'   => $this->email,
        'phone'   => $this->phone,
        'message' => $this->message,
    ];

    $response = Http::post(
        'https://script.google.com/macros/s/AKfycbzRXfvzUG9HcFNFrlxsybwJlTUTEW3jj_TfFK4twTB6HAYnAHUEKmpAv--gMLS9ZZRwTw/exec',
        
        $data
    );

    $result = $response->json();

    if ($result['status'] === 'error') {
        session()->flash('error', $result['message']);
        return;
    }

    // ✅ Send emails only if slot is free
    Mail::to('admin@dentiacare.com')->send(new AdminBookingMail($data));
    Mail::to($this->email)->send(new UserBookingMail($data));

    session()->flash('success', 'Appointment booked successfully!');
    $this->reset();
}


    public function render()
    {
        return view('livewire.booking')->layout('layouts.header');
    }
    public function updated($property)
{
    $this->validateOnly($property);
}

}
