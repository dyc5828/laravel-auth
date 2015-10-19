<?php

namespace App\Services;

use \Session;
use \Illuminate\Http\Request;

class Auth {
	private $user;
	private $password;

	public function __construct(Request $req) {
		$this->user = $req->input('user');
		$this->password = $req->input('password');
	}

	public function attempt() {
		// query against user db
		$dbUser = "dan";
		$dbPassword = "password";

		if($this->user == $dbUser && $this->password = $dbPassword) {
			Session::put('user',$dbUser);
			return true;
		}

		Session::forget('user');
		return false;
	}

	public function getUser() {
		if(Session::get('user')) {
			return Session::get('user');
		}
		return false;
	}
}