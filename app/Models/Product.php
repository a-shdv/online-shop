<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name', 'description', 'price']; // список разрешенных для изменения атрибутов (полей)

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
