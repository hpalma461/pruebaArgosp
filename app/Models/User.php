<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

//para incluir las relaciones entre los usuarios y los roles y permisos
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    //para incluir las relaciones entre los usuarios y los roles y permisos
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //relacion uno a muchos

    public function posts(){
        return $this->hasMany(Post::class);
    }

    //metodo para retornar una imagen para la foto del perfil de usuario
    public function adminlte_image(){
        return "storage/img/rinos.jpg";
    }

    //para mostrar el rol segun la base de datos en el menu del perfil
    public function adminlte_desc(){
        return "Desarrollador";
    }

    //para agregar el boton de perfil del usuario
    public function adminlte_profile_url()
    {
        return 'profile/username';
    }

}
