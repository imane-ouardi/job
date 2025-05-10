<?php
namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name, $email, $message;

    public $success = false;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email',
        'message' => 'required|string|min:5',
    ];

    public function send()
    {
        $this->validate();

        Mail::raw("Message from contact form:\n\nName: {$this->name}\nEmail: {$this->email}\nMessage:\n{$this->message}", function ($mail) {
            $mail->to('your-gmail@gmail.com') 
                 ->subject('New Contact Message');
        });

        $this->reset(['name', 'email', 'message']);
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
