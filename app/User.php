<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//  utilisation des faker voir aussi usercontroller.php
    static public function fake(){

        $f = \Faker\Factory::create('fr_CA');
        $resultat = new self();
        $resultat->prenom = $f->firstName();
        $resultat->nom = $f->lastName();
        $resultat->email = str_slug($resultat->prenom.$resultat->nom,"").'@'.$f->domainName();
        $resultat->tel = $f->phoneNumber();
        $resultat->adresse = $f->streetAddress();
        $resultat->ville = $f->city();
        $resultat->province = $f->state();
        $resultat->codepostal = $f->postcode();
        $resultat->citation = $f->paragraph();
        return $resultat;
    }
}
