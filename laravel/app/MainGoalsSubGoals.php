<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainGoalsSubGoals extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'main_goals_sub_goals';

    protected $guarded = [
      'created_at', 'updated_at'
    ];
}
