<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

      protected $fillable = [
        'book_name',
        
    ];

    public function user(){
        return $this->belongsTo(User::class, 'created_by', 'id');
      }

      public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
      }

      
}
