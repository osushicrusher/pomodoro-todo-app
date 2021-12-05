<?php

namespace App\Http\Controllers;

use App\MainGoals;
use App\MainGoalsSubGoals;
use App\SubGoals;
use Illuminate\Http\Request;

class SubGoalsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();
      $sub_goal = SubGoals::create($data);
      $sub_goal = $sub_goal->toArray();

      $goalData =
      [
        'main_goal_id' => $data['main_goal_id'],
        'sub_goal_id' => $sub_goal['id'],
      ];
      MainGoalsSubGoals::create($goalData);
      return back();
    }
}
