<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class lightSource extends Model {

    public $timestamps = false;

    public function response(){
        return $this->hasOne('App\Response');
    }
}
