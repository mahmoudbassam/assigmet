<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'post', 'admin_id'
    ];
    protected $table='posts';
    protected $timestamp=true;
   protected $with=['user','files'];
    public function files(){
        return $this->hasOne('App\file', 'id', 'file_id');
    }

    public function user(){
        return $this->hasOne('App\User','id','admin_id');
    }

}
