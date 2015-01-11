<?php

class GoatController extends \BaseController {

	protected $user;

	public function __construct(User $user){
		$this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make("main.index", ["currentdate" => date("d")]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if($this->user->fill($input)->isValid()){
			/*$testdate = Input::get("dateofbirth");
			$validdash = ["-"];
*/
			/*if(!ctype_alnum(str_replace($validdash, "", $testdate))){
				$testdate = substr($testdate, 4);
				$day = substr($testdate, 4, 2);
				$month = substr($testdate, 0, 3);
				$year = substr($testdate, -4, 4);
				switch($month){
					case "Jan":
						$month = "01";
						break;
					case "Feb":
						$month = "02";
						break;
					case "Mar":
						$month = "03";
						break;
					case "Apr":
						$month = "04";
						break;
					case "May":
						$month = "05";
						break;
					case "Jun":
						$month = "06";
						break;
					case "Jul":
						$month = "07";
						break;
					case "Aug":
						$month = "08";
						break;
					case "Sep":
						$month = "09";
						break;
					case "Oct":
						$month = "10";
						break;
					case "Nov":
						$month = "11";
						break;
					case "Dec":
						$month = "12";
						break;
				}
				$testdate = $year . "-" . $month . "-" . $day;
				$this->user->dateofbirth = $testdate;
			}else{
				$this->user->dateofbirth = Input::get("dateofbirth");
			}*/

			$this->user->dateofbirth = Input::get("dateofbirth");
			
			$this->user->save();

			return View::make("main.index", ["twittername" => $this->user->twittername, "currentdate" => date("d")]);
		}else{
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}

		return Redirect::to("/");

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($twittername)
	{
		//return View::make("main.show", ["twittername" => $twittername]);
	}

}
