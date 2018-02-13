<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Sentence extends Model
{
    public static function getSentenceByLessionId($lessionId)
    {
        $introSentenceList = DB::table('sentences')->where('lession_id', '=', $lessionId)->get();

        return $introSentenceList;
    }
}
