<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concurso extends Model
{
    protected $fillable = ['company_name', 'phone', 'Referencia', 'address', 'segment_area', 'distrito_id', 'provincia_id', 'Descricao', 'Validade', 'company_id'];

    public function company () {
        return $this->belongsTo(Company::class);
    }
}
