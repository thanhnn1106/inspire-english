<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Question extends Model
{
    public static function getQuestionByLessionId($lessionId)
    {
        $questionList = DB::table('questions')->where('lession_id', '=', $lessionId)->get();

        return $questionList;
    }
}
