<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainGoals;
use App\MainGoalsSubGoals;
use App\SubGoals;
use App\SubGoalsTasks;
use App\Task;
use App\UsersMainGoals;
use App\Http\Requests\StoreTask;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      dd(Task);
      return  Task::paginate(15);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      dd($request);
      Task::create($request->all());
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $res = [];

      // userIdからmain_goal_idsを取得
      $main_goals = UsersMainGoals::where('user_id', $id)->get()->toArray();
      $main_goal_ids = [];
      foreach ($main_goals as $goal) {
        array_push($main_goal_ids, $goal['main_goal_id']);
      }
      //メインゴールの取得
      $main_goals = MainGoals::whereIn('id', $main_goal_ids)->get()->toArray();
      $res['main_goals'] = $main_goals;

      $sub_goals = MainGoalsSubGoals::where('main_goal_id', $id)->get()->toArray();
      $sub_goal_ids = [];
      foreach ($sub_goals as $goal) {
        array_push($sub_goal_ids, $goal["sub_goal_id"]);
      }

      //サブゴールの取得
      $sub_goals = SubGoals::whereIn('id', $sub_goal_ids)->get()->toArray();
      $res['sub_goals'] = $sub_goals;

      $tasks = SubGoalsTasks::whereIn('sub_goal_id', $sub_goal_ids)->get()->toArray();
      $task_ids = [];
      foreach ($tasks as $task) {
        array_push($task_ids, $task["task_id"]);
      }
      $tasks = Task::whereIn('id', $task_ids)->get()->toArray();

      $res['tasks'] = $tasks;
      return $res;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::find($id)->delete();
        return back();
    }
}
