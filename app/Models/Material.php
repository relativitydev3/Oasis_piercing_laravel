<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Material
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Material extends Model
{
    protected $table = 'materials';
    
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    

}
