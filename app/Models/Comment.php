<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['bug_id', 'author', 'comment'];
    /**
     * Comment belongs to Bug
     * @return [type] [description]
     */
    public function bug()
    {
    	return $this->belongsTo('App\Models\Bug');
    }
}
