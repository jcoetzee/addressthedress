<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{

    protected $fillable = ['age', 'gender', 'eye_colour', 'handedness', 'brightness', 'seen_before', 'first_time_colour',
        'colours_changed', 'colour_seen', 'background_colour'];

    protected $casts = [
        'age' => 'integer',
        'brightness' => 'integer',
        'seen_before' => 'boolean',
        'colours_changed' => 'boolean'
    ];

    public function lightSource(){
        return $this->belongsTo('App\LightSource');
    }

}
