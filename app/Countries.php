<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    public static function getcountryListByLessionId($lessionId)
    {
        $countryList = DB::table('countries')->where('lession_id', '=', $lessionId)->get();

        return $countryList;
    }
}
