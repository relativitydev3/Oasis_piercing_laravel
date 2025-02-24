<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sale_details extends Model
{
    protected $table = 'sale_details';
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}
