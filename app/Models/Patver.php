<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patver extends Model
{
    use HasFactory;
    protected $fillable = ['hamar','anun','azganun','qanak','heraxos'];
}
