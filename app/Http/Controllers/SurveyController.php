<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateResponseRequest;
use App\LightSource;
use App\SurveyResponse;
use Flash;
use Session;

class SurveyController extends Controller
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

        return view('survey', compact('colour'));
    }

    public function post(CreateResponseRequest $request)
    {
        $input = $request->except('_token', 'light_source', 'g-recaptcha-response');

        $response = new SurveyResponse(array_add($input, 'background_colour', Session::get('colour')));

        $response->lightSource()->associate(LightSource::where('name', $request->get('light_source'))->firstOrFail());

        $response->save();

        Flash::overlay('Thanks for you time, please consider telling your friends about Address #TheDress and/or sharing on social networks, the more data we get the better.', 'Response Captured');

        return redirect('/');
    }

}
