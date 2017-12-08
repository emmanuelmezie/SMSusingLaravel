<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{

	public function index()
	{
    	return view('index');
	}


      public function store(Request $request)
    {
    	


    	// return "Your message has been sent. Thank you!";
    	 

      /*
        $inputs = $request->all();

        $contact = Contact::create($inputs);

        return "Contact Saved";
      */

    }
}
