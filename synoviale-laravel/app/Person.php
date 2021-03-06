<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    protected $fillable = [
        'name',
        'firstname',
        'phoneNumber1',
        'phoneNumber2',
        'email1',
        'email2',
        'comment'
    ];


    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
