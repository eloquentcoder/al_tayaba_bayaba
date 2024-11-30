<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFormFactory> */
    use HasFactory;

    protected $guarded = [];

    public function replies()
    {
        return $this->hasMany(ContactFormReply::class);
    }

}
