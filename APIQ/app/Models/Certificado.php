<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;
    // Certificado.php
public function participante()
{
    return $this->belongsTo(Participante::class);
}

public function curso()
{
    return $this->belongsTo(Curso::class);
}

}
