<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clothing extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function scopeFilter($query, array $filters) 
    {
    $query->when($filters['category'] ?? false, function ($query, $category) {
        $query->whereHas('category', fn ($query) =>
            $query->where('name', $category)
        );
    });
}
  
    public function category (){

        return $this->belongsTo(category::class);
    }

}
