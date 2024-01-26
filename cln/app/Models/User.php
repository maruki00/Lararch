<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

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
        // 'email_verified_at' => 'datetime',
        // 'password'          => 'hashed',
    ];


    public function getName(): string
    {
        return $this->name;
    }
    public function getEmail(): EmailValueObject
    {
        return new EmailValueObject($this->email);
    }
    public function getPassword(): PasswordValueObject
    {
        return new PasswordValueObject($this->password);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setEmail(EmailValueObject $email){
        $this->email = (string)$email;
    }
    public function setPassword(PasswordValueObject $password){
        $this->password = (string)$password;
    }



}
