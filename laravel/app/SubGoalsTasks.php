<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubGoalsTasks extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'sub_goals_tasks';

    protected $guarded = [
      'created_at', 'updated_at'
    ];
}
