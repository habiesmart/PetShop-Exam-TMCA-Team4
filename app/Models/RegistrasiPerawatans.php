<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrasiPerawatans extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function pet() {
        return $this->belongsTo(Pet::class);
    }

    public function paket_perawatan() {
        return $this->belongsTo(PaketPerawatan::class);
    }
}
