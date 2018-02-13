<?php

use Illuminate\Database\Seeder;
use App\Vocabulary;

class VocabularyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Name';
        $vocabulary->word_vn = 'Tên';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'What';
        $vocabulary->word_vn = 'Gì';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Where';
        $vocabulary->word_vn = 'Ở đâu';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Work';
        $vocabulary->word_vn = 'Công việc';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Working';
        $vocabulary->word_vn = 'Đang làm việc';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Job';
        $vocabulary->word_vn = 'Việc làm';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Study';
        $vocabulary->word_vn = 'Học';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Old';
        $vocabulary->word_vn = 'Cũ';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Age';
        $vocabulary->word_vn = 'Tuổi';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Born';
        $vocabulary->word_vn = 'Sinh ra';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Favorite';
        $vocabulary->word_vn = 'Yêu thích';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Food';
        $vocabulary->word_vn = 'Món ăn';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Country';
        $vocabulary->word_vn = 'Quốc gia';
        $vocabulary->save();

        $vocabulary = new Vocabulary();
        $vocabulary->lession_id = 1;
        $vocabulary->word_en = 'Nationality';
        $vocabulary->word_vn = 'Quốc tịch';
        $vocabulary->save();
    }
}
