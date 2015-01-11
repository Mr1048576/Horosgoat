<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface{
	public $timestamps = true;

	protected $fillable = ["twittername", "dateofbirth"];

	//set up registration rules:
	public static $rules = [
		"twittername" => "required|max:16|min:2|unique:users",
		"dateofbirth" => "required"
	];

	public $errors;

	use Usertrait, RemindableTrait;

	//DB table used by model:
	protected $table = "users";

	protected $hidden = [];

	public function isValid(){
		$validation = Validator::make($this->attributes, static::$rules);

		if($validation->passes()) return true;

		$this->errors = $validation->messages();

		return false;
	}
}