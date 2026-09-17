<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['institution_id', 'nis', 'name', 'email', 'foto'])]
class Student extends Model
{
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
