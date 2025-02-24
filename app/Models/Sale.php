<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Sale
 *
 * @property $id
 * @property $Nombre_Cliente
 * @property $Apellido_Cliente
 * @property $Direccion_Cliente
 * @property $Ciudad_Cliente
 * @property $Departamento_Cliente
 * @property $Telefono_Cliente
 * @property $Correo_Cliente
 * @property $user_id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Nombre_Cliente', 'Apellido_Cliente', 'Direccion_Cliente', 'Ciudad_Cliente', 'Departamento_Cliente', 'Telefono_Cliente', 'Correo_Cliente', 'user_id', 'estado'];

 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function details()
    {
        return $this->hasMany(sale_details::class, 'sale_id');
    }
    
    public function status()
    {
        return $this->belongsTo(SalesStatus::class, 'estado');
    }
    
    
}
