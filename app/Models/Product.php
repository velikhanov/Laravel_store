<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\ProductImage;

class Product extends Model
{
  use HasFactory;
  protected $fillable = [
    'name',
    'name_az',
    'name_en',
    'category_id',
    'properties',
    'properties_az',
    'properties_en',
    'description',
    'description_az',
    'description_en',
    'price',
    'url',
    'status'
  ];
  protected $casts = [
      'properties' => 'array'
    ];
  public function productImage()
  {
      return $this->hasMany(ProductImage::class);
  }
  public function cardImage()
  {
      return $this->hasOne(ProductImage::class)->where('position', 1);
  }
  public function category()
  {
      return $this->belongsTo(Category::class);
  }
  public function getIsAvailableTextAttribute()
  {
      return $this->status === 1 ? 'В наличии' : 'Нет в наличии';
  }
  public function getIsAvailableIconAttribute()
  {
      return $this->status === 1 ? 'fas fa-check' : 'fas fa-times';
  }
}
