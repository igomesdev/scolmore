<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Phonebook extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phonenumber', 'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
