<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
 
    protected $dates = ['deleted_at'];
    
    
    protected $fillable = [
       'name',
       'email',
       'phone',
       'password',
       'region_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'region_id' => 'integer',
    ];


    public static $rules = [
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:30',
        'email' => 'required|string',
        'password' => 'required|string|max:255',
        'region_id' => 'nullable|integer',
    ];


    public function region()
    {
        return $this->belongsTo(\App\Models\Region::class, 'region_id');
    }


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = 'Mr.'.$name;
    }

    
    // public function getNameAttribute($name)
    // {
    //     return 'Mr.'.$name;
    // }
}
