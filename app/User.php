<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    public const VALIDATION_RULES = [
        'role_id'               => ['required','integer'], 
        'name'                  => ['required','string'], 
        'email'                 => ['required','email','unique:users,email'], 
        'mobile_no'             => ['required','unique:users,mobile_no'], 
        'avatar'                => ['nullable','image','mimes:jpg,jpeg,png,svg,webp'], 
        'district_id'           => ['required','integer'],
        'upazila_id'            => ['required','integer'],
        'postal_code'           => ['required','numeric'],
        'address'               => ['required','string'],
        'password'              => ['required','string','confirmed'],
        'password_confirmation' => ['required','string','min:10']
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'name', 'email', 'mobile_no', 'avatar', 'district_id','upazila_id',
        'postal_code','address','password','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
