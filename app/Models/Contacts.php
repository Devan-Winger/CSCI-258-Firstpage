<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    /** @use HasFactory<\Database\Factories\ContactsFactory> */
    use HasFactory;

    protected $fillable = ['name', 'email', 'birthday', 'user_id'];
    protected $dates = ['birthday'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
