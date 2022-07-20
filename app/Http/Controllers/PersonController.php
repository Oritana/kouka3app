<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        return view('kouka3.index', ['items' => $items]);
    }

    public function add(Request $request)
{
   return view('kouka3.add');
}

public function create(Request $request)
{
   $this->validate($request, Person::$rules);
   $person = new Person;
   $form = $request->all();
   unset($form['_token']);
   $person->fill($form)->save();
   return redirect('/person');
}
}
