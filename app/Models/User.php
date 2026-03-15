<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // This If We Have A Primary Key With Another Name
    // protected $primaryKey = 'owner_id';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // One To One Relationship
    public function house(): HasOne
    {
        // This If We Have A Primary Key With Another Name
        // user_id Is A FK and owner_id Is A PK
        
        // return $this->hasOne(House::class, 'user_id', 'owner_id');

        return $this->hasOne(House::class);
    }

    // One To Many Relationship
    public function houses(): HasMany
    {
        // This If We Have A Primary Key With Another Name
        // user_id Is A FK and owner_id Is A PK

        // return $this->hasMany(House::class, 'user_id', 'owner_id');

        return $this->hasMany(House::class);
    }
}
