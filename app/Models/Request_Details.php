<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_Details extends Model
{
    use HasFactory;

    
    public $timestamps = false;
    
    protected $fillable = [
        'request_id',
        'quantity',
        'stats',
        'drug_image',
        'drug_title',
         'repeat_every',
         'accept_alternative',
         'repeat_until'
       

    ];

    public function request()
    {
        $this->belongsTo(Request::class,'request_id');
    }

}
