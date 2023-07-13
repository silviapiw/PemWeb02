<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'shop_categories';

    protected $fillable = [
        'parent_id',
        'slug',
        'name',
    ];
    
    
    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\CategoryFactory::new();
    }

    public function children()
    {
        return $this->hasMany('Modules\Shop\Entities\Category', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('Modules\Shop\Entities\Category', 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany('Modules\Shop\Entities\Product', 'shop_categories_products', 'product_id', 'category_id');
    }
}