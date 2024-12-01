<?php

namespace App\Models;

use App\Models\Consultant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ourteam extends Model
{
    use HasFactory;
    public function getSlugAttribute()
    {
        return str_replace( ' ' , '_' , $this->name);
    }
    public function consultant()
    {
        return $this->hasOne(Consultant::class, 'id' , 'consultant_id');
    }
}
