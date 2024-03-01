<?php

namespace App\Http\Controllers;

use App\Models\Sheet;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SheetController extends Controller
{
  public function sheets()
  {
    $sheets = Sheet::all();
    return view('sheets', ['sheets' => $sheets]);
  }
}
