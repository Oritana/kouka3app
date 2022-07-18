<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class Kouka3Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        $param = ['input' => '','items' => $items];
        return view('kouka3.index', $param);
    }

    public function find(Request $request)
    {
        $item = Person::where('name',$request->input)->first();
        return view('kouka3.show', ['item' => $item]);
    }

    public function show(Request $request)
    {
        $item = Person::where('id', $request->id)->first();
        return view('kouka3.show', ['item' => $item]);
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
        return redirect('/kouka3');
    }
    public function edit(Request $request)
    {
        $item = Person::find($request->id);
        return view('kouka3.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/kouka3');
    }

    public function del(Request $request)
    {
        $item = Person::find($request->id);
        return view('kouka3.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/kouka3');
    }
}
