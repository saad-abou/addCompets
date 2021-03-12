<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifiedaccounts extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','statut','specialite',
                            'departement','secteur','adress','pays',
                            'ville','email','user_id'];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
