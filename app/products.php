<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $guarded=[];
    public function section()
    {
        return $this->belongsTo(sections::class,'section_id');

//        return $this->hasOne(User::class,'user_id');
//        return $this->belongsTo('App\sections');
//        return $this->hasMany('App\sections');
//        return $this->hasOne('App\sections');

    }

}
