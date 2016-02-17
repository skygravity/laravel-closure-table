<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';    
    protected $fillable = ['product_id','product_name'];
    public $timestamps = false;

    
    /**
     * Many products has many bugs
     * @return [type] [description]
     */
    public function bugs()
    {
    	return $this->belongsToMany('App\Models\Bug', 'bugs_products', 'product_id', 'bug_id');
    }

}
