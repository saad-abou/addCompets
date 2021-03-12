<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newaccounts extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','statut','specialite',
                            'departement','secteur','adress','pays',
                            'ville','gsm','email','user_id','addedCompte'];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
