<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;


class NotebooksController extends Controller
{
	//function passing data to the index.blade.php
    public function index()
    {
    //Fetching all data from database
     $notebooks = Notebook::all();
    //Passing data to the view "notebooks.index"
     return view('notebooks.index',compact('notebooks'));
    }

    //Calling the create.blade.php page
    public function create()
    {
         return view('notebooks.create');
 
     }
   
}
