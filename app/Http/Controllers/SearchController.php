<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function search(Request $request){
      $data = DB::table('students')->where('name','LIKE','%'.$request->name.'%')->get();
      return view('search', compact('data'));
      }
    }
