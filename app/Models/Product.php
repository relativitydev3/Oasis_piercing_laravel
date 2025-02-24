<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 *
 * @property $id
 * @property $nombre
 * @property $material
 * @property $precio
 * @property $stock
 * @property $imagen
 * @property $descripcion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    // use HasFactory;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'material_id', 'precio', 'stock', 'imagen', 'descripcion', 'estado_id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function status()
    {
        return $this->belongsTo(ProductStatus::class, 'estado_id');
    }
    
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
