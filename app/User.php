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

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function district(){
        return $this->belongsTo(Location::class,'district_id','id');
    }
    public function upazila(){
        return $this->belongsTo(Location::class,'upazila_id','id');
    }


    private $order = array('users.id'=>'desc');
    private $column_order;

    private $orderValue;
    private $dirValue;
    private $startVlaue;
    private $lengthVlaue;

    public function setOrderValue($orderValue){
        $this->orderValue = $orderValue;
    }
    public function setDirValue($dirValue){
        $this->dirValue = $dirValue;
    }
    public function setStartValue($startVlaue){
        $this->startVlaue = $startVlaue;
    }
    public function setLengthValue($lengthVlaue){
        $this->lengthVlaue = $lengthVlaue;
    }

    private function get_datatable_query(){
        $query = self::with(['role:id,role_name','district:id,location_name','upazila:id,location_name']);
        if(isset($this->order)){
            $query->orderBy(key($this->order), $this->order[key($this->order)]);
        }
        return $query;
    }

    public function getList(){
        $query = $this->get_datatable_query();
        if($this->lengthVlaue != -1){
            $query->offset($this->startVlaue)->limit($this->lengthVlaue);
        }
        return $query->get();
    }

    public function count_filtered(){
        $query = $this->get_datatable_query();
        return $query->get()->count();
    }

    public function count_all(){
        return self::toBase()->get()->count();
    }
}
