<?php

namespace App\Models;

use Mail;
use App\Mail\Emailsend;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emailcontact extends Model
{
    use HasFactory;
    protected $table="emailcontact";
    public $fillable = ['name', 'email', 'telephone', 'address', 'date', 'time'];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "itsdeeputiwari@gmail.com";
            Mail::to($adminEmail)->send(new Emailsend($item));
        });
    }
}
