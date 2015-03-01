<?php namespace App\Http\Requests;

class CreateResponseRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'gender' => ['required', 'in:male,female'],
            'age' => ['required', 'min:0', 'max:150'],
            'handedness' => ['required', 'in:left,right,ambidextrous'],
            'eye_colour' => ['in:brown,hazel,blue,green,grey,amber'],
            'light_source' => ['in:sunrise,incandescent,florescent,daylight,cloudy,shade'],
            'brightness' => ['integer', 'min:0', 'max:2'],
            'seen_before' => ['required', 'integer', 'min:0', 'max:1'],
            'first_time_colour' => ['in:blue_black,white_gold'],
            'colours_changed' => ['integer', 'min:0', 'max:1'],
            'colour_seen' => ['required', 'in:blue_black,white_gold']
        ];

        if (App::environment() === 'production') {
            array_add($rules, 'g-recaptcha-response', ['required', 'recaptcha']);
        }

        return $rules;
    }

}
