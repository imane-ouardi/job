<?php

namespace App\Filament\Employer\Pages;

use Filament\Pages\Page;
use Illuminate\Database\Eloquent\Model;

class Register extends \Filament\Pages\Auth\Register
{
    protected function getRedirectUrl(): string
    {
        // Customize based on panel
        return match (filament()->getCurrentPanel()->getId()) {
            'admin' => route('filament.admin.pages.dashboard'),
            'user' => route('filament.user.pages.dashboard'),
            default => route('home'),
        };
    }

    protected function afterRegister(): void
    {
        Auth::login($this->getUser());
    }
}
