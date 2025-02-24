<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SalesStatus
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SalesStatus extends Model
{
    protected $table = 'sales_status';

    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'description'];

    public function products()
{
    return $this->hasMany(Product::class, 'estado_id');
}


}
