<?php

use Illuminate\Database\Seeder;

use App\Question;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = new Question();
        $question->lession_id = 1;
        $question->question_en = 'What is your name?';
        $question->question_vn = 'Bạn tên gì?';
        $question->save();
        
        $question = new Question();
        $question->lession_id = 1;
        $question->question_en = 'How old are you?';
        $question->question_vn = 'Bạn bao nhiêu tuổi?';
        $question->save();
        
        $question = new Question();
        $question->lession_id = 1;
        $question->question_en = 'What do you do?';
        $question->question_vn = 'Bạn làm nghề gì?';
        $question->save();
        
        $question = new Question();
        $question->lession_id = 1;
        $question->question_en = 'How are you?';
        $question->question_vn = 'Bạn khoẻ không?';
        $question->save();
        
        $question = new Question();
        $question->lession_id = 1;
        $question->question_en = 'Where are you from?';
        $question->question_vn = 'Bạn từ đâu đến?';
        $question->save();
        
        $question = new Question();
        $question->lession_id = 1;
        $question->question_en = 'Where do you live?';
        $question->question_vn = 'Bạn sống ở đâu?';
        $question->save();
        
        $question = new Question();
        $question->lession_id = 1;
        $question->question_en = 'Are yoy marry?';
        $question->question_vn = 'Bạn đã kết hôn chưa?';
        $question->save();
        
        $question = new Question();
        $question->lession_id = 1;
        $question->question_en = 'What is your favorite food?';
        $question->question_vn = 'Món ăn yêu thích của bạn là gì?';
        $question->save();
        
        $question = new Question();
        $question->lession_id = 1;
        $question->question_en = 'What is your favorite sport?';
        $question->question_vn = 'Môn thể thao yêu thích của bạn là gì?';
        $question->save();
    }
}
