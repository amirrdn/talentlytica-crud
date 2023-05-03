<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MParticipant extends Model
{
    use HasFactory;

    protected $table    = 'participant';
    protected $fillable = ['name', 'email', 'mark_x', 'mark_y', 'mark_z', 'mark_w'];
}
