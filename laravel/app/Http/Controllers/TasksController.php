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
      $data = $request->all();
      $task = Task::create($request->all());
      $task = $task->toArray();
      $subGoalData =
      [
        'sub_goal_id' => $data['sub_goal_id'],
        'task_id' => $task['id']
      ];
      SubGoalsTasks::create($subGoalData);
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
      foreach ($main_goals as $main_goal) {
        $res['main_goals'][$main_goal['id']] = $main_goal;
      }

      $sub_goals = MainGoalsSubGoals::where('main_goal_id', $id)->get()->toArray();
      $sub_goal_ids = [];
      foreach ($sub_goals as $goal) {
        array_push($sub_goal_ids, $goal["sub_goal_id"]);
      }

      //サブゴールの取得
      $sub_goals = SubGoals::whereIn('id', $sub_goal_ids)->get()->toArray();
      foreach ($sub_goals as $sub_goal) {
        $res['sub_goals'][$sub_goal['id']] = $sub_goal;
      }

      $tasks = SubGoalsTasks::whereIn('sub_goal_id', $sub_goal_ids)->get()->toArray();
      $task_ids = [];
      foreach ($tasks as $task) {
        array_push($task_ids, $task["task_id"]);
      }
      $tasks = Task::whereIn('id', $task_ids)->get()->toArray();
      foreach ($tasks as $task) {
        $res['tasks'][$task['id']] = $task;
      }

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
