<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTeam;
use App\Http\Requests\UpdateTeam;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Team;

class TeamController extends Controller
{
  public function index()
  {
    $teams = Team::latest()->paginate(6);
    return view('backend.team.index',compact('teams'));
  }

  public function create()
  {
    return view('backend.team.create');
  }

  public function store(StoreTeam $request)
  {
    DB::transaction( function () use ($request)
    {
      $data = $request->data();
      $team = Team::create($data);
      $this->uploadRequestImage($request,$team);
    });
    return redirect()->route('team.index')->withsuccess(trans('team information has been successfully created',[ 'entity' => 'team']));
  }

  public function show(Team $team)
  {
    return view($team->view,compact('teams'));
  }

  public function edit(Team $team)
  {
    return view('backend.team.edit',compact('team'));
  }

  public function update(UpdateTeam $request,Team $team)
  {
    DB::transaction(function () use($request,$team)
    {
      $team->update($request->data());

      $this->uploadRequestImage($request,$team);
    });
    return redirect()->route('team.index')->withsuccess(trans('team information has been successfully updated',['entity'=>'team']));
  }

  public function delete(team $team)
  {
       $team->delete();

        return back()->withsuccess(trans('team has been deleted successfully', ['entity'=>'team']));
  }
}
