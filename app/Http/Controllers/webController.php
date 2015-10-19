<?php

namespace App\Http\Controllers;

use App\Services\Auth;
use \Illuminate\Http\Request;

class webController extends Controller {

	function login() {
		return view('login');
	}

	function signin(Request $req) {
		$auth = new Auth($req);

		// dd($auth->attempt());

		if($auth->attempt()) {
			return redirect('dashboard');
		}

		return redirect('login');
	}

	function dashboard(Request $req) {
		$auth = new Auth($req);

		if($auth->getUser()) {
			return view('dashboard');
		}
		return redirect('login');
	}

}