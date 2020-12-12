<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logout extends Controller
{
    //
       public function logout() {
		    //logout user
		    auth()->logout();
		    // redirect to homepage
		    return redirect('/');
		}
}
