<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Bind users to role
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(){
        return $this->hasMany('App\User');
    }
}
