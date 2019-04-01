<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];
    protected $table='files';
    protected $timestamp=true;

    public function posts(){
        return $this->belongsTo('App\post','id');
    }
}
