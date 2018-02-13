<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class Alphabet extends Model
{
    public $table = 'alphabet';

    public static function getAlphabetByLessionId($lessionId)
    {
        $alphabetList = DB::table('alphabet')->where('lession_id', '=', $lessionId)->get();

        return $alphabetList;
    }
}
