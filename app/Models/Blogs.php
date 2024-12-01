<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    public function getSlugAttribute()
    {
        return str_replace( ' ' , '_' , $this->title);
    }
    public function consultant()
    {
        return $this->hasOne(Consultant::class, 'id' , 'consultant_id');
    }
    
}
