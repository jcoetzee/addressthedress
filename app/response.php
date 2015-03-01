<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class response extends Model
{

    protected $fillable = ['age', 'gender', 'eye_colour', 'handedness', 'brightness', 'seen_before', 'first_time_colour',
        'colours_changed', 'colour_seen', 'background_colour'];

    public function lightSource(){
        return $this->belongsTo('App\LightSource');
    }

}
