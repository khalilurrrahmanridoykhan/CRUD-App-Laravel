<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegiserUser extends Model
{

    use HasFactory;
    protected $table = "regiser_users";
    protected $primaryKey = "id";
}
