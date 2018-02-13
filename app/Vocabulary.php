<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Vocabulary extends Model
{
    public static function getVocabularyByLessionId($lessionId)
    {
        $vocaList = DB::table('vocabularies')->where('lession_id', '=', $lessionId)->get();

        return $vocaList;
    }
}
