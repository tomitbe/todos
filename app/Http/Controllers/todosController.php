<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller, Auth, View, Form, Validator,Redirect, Session, Input, DB;
use App\Models\todos;

class todosController extends Controller
{
    public function index()
    {

        //$todos = todos::where('userid','=',Auth::id());
        if (Auth::check()) {
            $todos = DB::table('todos')->where('userid',Auth::id())->get();
            //echo "<pre>"; print_r($todos); die();
            return View::make('todo/index')->with('todos',$todos);
        } else {
            return View::make('notloggedin');
        }
    }

    public function store()
    {
        $rules = array('label' => 'required');
        $validator = Validator::make(Input::all(), $rules);
        if ($validator -> fails()) {
            return Redirect::to('todos') -> withErrors($validator) -> withInput();
        } else {
            // store
            if (Auth::check()) {
                $item = new todos;
                $item->label = Input::get('label');
                $item->userid = Auth::id();
                $item->save();
                // redirect
                Session::flash('message', 'Item toegevoegd');
                return Redirect::to('todos');
            }
        }
    }

    public function destroy($id)
    {
        try {
            // delete
            $item = todos::find($id);
            $item -> delete();

            // redirect
            Session::flash('message', 'Item is gewist');
            return Redirect::to('todos');
        } catch (Exception $e) {
            // Prepare the error message
            Session::flash('message', 'Item wissen is niet gelukt');
            return Redirect::to('todos');
        }
    }

}