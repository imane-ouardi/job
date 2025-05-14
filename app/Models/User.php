<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;


use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'company_id',
        'profile_photo',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function isAdmin() { return $this->role === 'admin'; }
    public function isEmployer() { return $this->role === 'employer'; }
    public function isEmployee() { return $this->role === 'employee'; }

    public function canAccessPanel(Panel $panel): bool
    {
        $panelId = $panel->getId();

        if ($this->role === 'admin') {
            return true; 
        }

        return match ($panelId) {
            'employer' => $this->role === 'employer',
            'employee' => $this->role === 'employee',
            default => false,
        };
    }
}