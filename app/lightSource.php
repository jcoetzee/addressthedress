<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class LightSource extends Model {

    public $timestamps = false;

    public function response(){
        return $this->hasOne('App\Response');
    }
}
