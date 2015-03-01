<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

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
        $colour = mt_rand(0,1) == 0 ? 'white' : 'black';

        \Session::put(compact('colour'));

        $magnific = 'css/magnific-popup-' . $colour . '.css';

		return view('welcome', compact('magnific'));
	}

    public function post()
    {

    }

}
