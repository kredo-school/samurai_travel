<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const USER_ROLE_ID = 1;
    const ADMIN_ROLE_ID = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role_id',
        'google_id',
        'facebook_id',
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
    ];

    # Use this to get all plans that Auth user have
    public function plan(){
        return $this->hasMany(Plan::class);
    }

    #Use this to get all favorite places of Auth user
    public function placeFavorites(){
        return $this->belongsToMany(Place::class, 'place_favorites', 'user_id', 'place_id');
    }


    # Use this to get interest keyword of Auth user
    public function interestedKeywords(){
        return $this->belongsToMany(Keyword::class, 'interests', 'user_id', 'keyword_id');
    }

    # Use this to get favorite plans of Auth user
    public function planFavorite(){
        return $this->hasMany(PlanFavorite::class, 'plan_favorites', 'user_id', 'plan_id');
    }

    # Use this to get the plan that Admin user recommends
    public function recommendPlan(){
        return $this->hasMany(Plan::class);
    }

    # Use in my page
    public function myPagePlaceFavorites()
    {
        return $this->hasMany(PlaceFavorite::class)->oldest();
    }

    public function myPagePlanFavorites()
    {
        return $this->hasMany(PlanFavorite::class)->oldest();
    }

    public function myPageInterests()
    {
        return $this->hasMany(Interest::class)->oldest();
    }

    public function myPageMyPlans()
    {
        return $this->hasMany(Plan::class)->where('user_type', 'user')->oldest();
    }

}
