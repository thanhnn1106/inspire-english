<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class Qasentence extends Model
{
    public static function getQaSentenceByLessionId($lessionId)
    {
        $qaSentenceList = DB::table('qasentences')->where('lession_id', '=', $lessionId)->get();

        return $qaSentenceList;
    }
}
