<?php namespace App\Http\Controllers;

use App\lightSource;
use App\Response;
use Input;
use Session;

class WelcomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */


    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        $colour = mt_rand(0, 1) == 0 ? 'white' : 'black';

        Session::flash('colour', $colour);

        return view('welcome', compact('colour'));
    }

    public function post()
    {
        $input = array_add(Input::except('_token', 'light_source', 'g-recaptcha-response'), 'background_colour', Session::get('colour'));

        $response = new Response($input);

//        dd(lightSource::where('name', Input::get('light_source')));

        $response->lightSource()->associate(lightSource::where('name', Input::get('light_source'))->first());

        $response->save();
    }

}
