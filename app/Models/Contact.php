<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email', 'message'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Crypt::encryptString($value);
    }

    // Accessor for decrypting the name
    public function getNameAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    // Mutator for encrypting the phone
    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = Crypt::encryptString($value);
    }

    // Accessor for decrypting the phone
    public function getPhoneAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    // Mutator for encrypting the email
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = Crypt::encryptString($value);
    }

    // Accessor for decrypting the email
    public function getEmailAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    // Mutator for encrypting the message
    public function setMessageAttribute($value)
    {
        $this->attributes['message'] = Crypt::encryptString($value);
    }

    // Accessor for decrypting the message
    public function getMessageAttribute($value)
    {
        return Crypt::decryptString($value);
    }
}
