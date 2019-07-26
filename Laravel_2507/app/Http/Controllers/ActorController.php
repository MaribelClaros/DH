<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
  public function directory()
  {
    $actores = Actor::all();
    return view("actores", compact("actores"));
  }

  public function show($id)
  {
    $actor = Actor::find($id);
    return view("actor", compact("actor"));
  }

  public function search()
  {
    $actores = Actor::where("first_name", "LIKE", "%" . $_GET['buscador'] . "%")->first();

    return view("actor", compact("actores"));
  }
}
