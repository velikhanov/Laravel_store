<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Category extends Model
{
  protected $table = 'categories';

  public function parent()
  {
      return $this->belongsTo(Category::class, 'parent_id');
  }
  public function children()
  {
      return $this->hasMany(Category::class, 'parent_id');
  }
  public function products()
  {
      return $this->hasMany(Product::class);
  }
    use HasFactory;
}
