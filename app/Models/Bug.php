<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    protected $table = 'bugs';
    protected $fillable = ['summary', 'description', 'resolution', 'reported_by', 'asigned_to', 'verified_by', 'status'];
    /**
     * Each bug belongs to User
     * @return [type] [description]
     */
    public function user()
    {
    	return $this->belongsTo('Parduodu\Models\User');
    }
    /**
     * Each bug may have many comments
     * @return [type] [description]
     */
    public function comment()
    {
    	return $this->hasMany('Parduodu\Models\Comment', 'bug_id');
    }
    /**
     * Each product may have many bugs, and same bug may appear on many products
     * @return [type] [description]
     */
    public function products()
    {
    	return $this->belongsToMany('App\Models\Product', 'bugs_products', 'bug_id', 'product_id');
    }
}
