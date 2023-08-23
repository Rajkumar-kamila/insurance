<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelModel extends Model
{
    use HasFactory;
    protected $table = 'model';

    public function brand_details() {
        return $this->belongsTo(BrandsModel::class, 'brand_id', 'id');
    }

    public function category_details() {
        return $this->belongsTo(CategoryModel::class, 'category_id', 'id');
    }

}
