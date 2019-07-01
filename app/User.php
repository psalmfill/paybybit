<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','address','username','phone','role_id'
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

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function transactions()
    {
        return $this->hasManyThrough(
            Transaction::class,
            Product::class,
            'user_id', // Foreign key on products table...
            'product_id', // Foreign key on transactions table...
            'id', // Local key on transactions table...
            'id' // Local key on users table...
        );
    }

    public function isAdmin(){
        return $this->role->name === 'admin';
    }
}
