<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Domain\Interfaces\UserEntity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements UserEntity
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];

    public function setName(string $name):void
    {
        $this->attributes['name'] = $name;
    }

    public function setPasswordAttribute($value):void
    {
        $this->attributes['password'] = new PasswordValueObject($value);
    }

    public function setEmail(string $email):void
    {
        $this->attributes['email'] = new EmailValueObject($email);
    }

    public function getEmail():EmailValueObject
    {
        return $this->attributes['email'];
    }

    public function getPassword():PasswordValueObject
    {
        return $this->attributes['password'];
    }

    public function getName():string{
        return $this->attributes['name'];
    }

}
