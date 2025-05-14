<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class JobApplicationForm extends Component
{
    use WithFileUploads;

    public $jobId;
    public $userId;
    public $full_name;
    public $email;
    public $phone;
    public $education;
    public $experience;
    public $skills;
    public $cv;
    public $extra_file;
    public $cover_letter;
    public $terms = false;

    protected $rules = [
        'full_name'    => 'required|string|max:255',
        'email'        => 'required|email|max:255',
        'phone'        => 'required|string|max:20',
        'education'    => 'nullable|string|max:255',
        'experience'   => 'nullable|string|max:2000',
        'skills'       => 'nullable|string|max:1000',
        'cv'           => 'required|file|mimes:pdf,doc,docx|max:2048',
        'extra_file'   => 'nullable|file|max:4096',
        'cover_letter' => 'nullable|string|max:2000',
        'terms'        => 'accepted',
    ];

    public function mount($jobId)
    {
        $this->jobId = $jobId;
        $this->userId = auth()->id();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validated = $this->validate();

        // رفع الملفات
        $cvPath = $this->cv->store('applications/cv', 'public');
        $extraFilePath = $this->extra_file ? $this->extra_file->store('applications/extra', 'public') : null;

        // حفظ البيانات في قاعدة البيانات (مثال)
        \App\Models\Application::create([
            'job_id'       => $this->jobId,
            'user_id'      => $this->userId,
            'full_name'    => $this->full_name,
            'email'        => $this->email,
            'phone'        => $this->phone,
            'education'    => $this->education,
            'experience'   => $this->experience,
            'skills'       => $this->skills,
            'cv'           => $cvPath,
            'extra_file'   => $extraFilePath,
            'cover_letter' => $this->cover_letter,
        ]);

        // إعادة تعيين الحقول
        $this->reset([
            'full_name', 'email', 'phone', 'education', 'experience',
            'skills', 'cv', 'extra_file', 'cover_letter', 'terms'
        ]);

        session()->flash('success', 'Your application has been submitted successfully!');
    }

    public function render()
    {
        return view('livewire.job-application-form');
    }
}
