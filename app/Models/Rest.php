<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Rest extends Model
{
    use HasFactory;

    protected $fillable=["name","desciption"];
    protected $table ='rest';


    protected static function boot() {
        parent::boot();
        self::creating(function ($table) {
            if ( ! app()->runningInConsole()) {
                $table->user_id = auth()->id();
            }
        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
