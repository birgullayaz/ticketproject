<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Ticket extends Authenticatable
{
        use HasFactory, Notifiable;

  
    protected $fillable = [
        'ticket_title',
        'ticket_country',
        'ticket_detail',
        'ticket_importance',
        'ticket_status',
        'user_email'
    ];

   
}
