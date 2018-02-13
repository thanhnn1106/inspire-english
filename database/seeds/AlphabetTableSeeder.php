<?php

use Illuminate\Database\Seeder;

use App\Alphabet;

class AlphabetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vocabulary = new Alphabet();
        $vocabulary->lession_id = 1;
        $vocabulary->letter = 'A';
        $vocabulary->word = 'Apple';
        $vocabulary->save();

        $vocabulary = new Alphabet();
        $vocabulary->lession_id = 1;
        $vocabulary->letter = 'B';
        $vocabulary->word = 'Bread';
        $vocabulary->save();

        $vocabulary = new Alphabet();
        $vocabulary->lession_id = 1;
        $vocabulary->letter = 'C';
        $vocabulary->word = 'Chicken';
        $vocabulary->save();
        
        $vocabulary = new Alphabet();
        $vocabulary->lession_id = 1;
        $vocabulary->letter = 'D';
        $vocabulary->word = 'Dog';
        $vocabulary->save();
        
        $vocabulary = new Alphabet();
        $vocabulary->lession_id = 1;
        $vocabulary->letter = 'E';
        $vocabulary->word = 'Elephant';
        $vocabulary->save();
        
        $vocabulary = new Alphabet();
        $vocabulary->lession_id = 1;
        $vocabulary->letter = 'F';
        $vocabulary->word = 'Five';
        $vocabulary->save();
    }
}
