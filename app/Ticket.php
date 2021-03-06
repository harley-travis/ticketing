<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {

    /**
     * Protected dates all you to format the dates
     * In the view write {{ $ticket->created_at->format('y-m-d') }}
     * In order to use this, you must use the Elequent SQL functions
     * EX: $tickets = Ticket::where()->get();
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
    protected $fillable = [
        'name',
        'email',
        'subject', 
        'message',
        'status',
        'company_id',
        'user_id',
    ];


    public function company() {
        return $this->belongsTo(Company::class);
    }

}