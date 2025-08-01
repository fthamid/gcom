<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Client extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'adresse',
    ];
    public function scopeSearch($query, $search)
    {
        return $query->where('nom', 'like', '%' . $search . '%')
        ->orWhere('email', 'like', '%' . $search . '%')
        ->orWhere('telephone', 'like', '%' . $search . '%')
        ->orWhere('adresse', 'like', '%' . $search . '%');
    }
    public function factures()  {
        return $this->hasMany(Facture::class);
    }

}
