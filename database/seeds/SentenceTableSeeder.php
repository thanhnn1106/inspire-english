<?php

use Illuminate\Database\Seeder;
use App\Sentence;

class SentenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sentence = new Sentence();
        $sentence->lession_id = 1;
        $sentence->sentence_en = 'Hello!';
        $sentence->sentence_vn = 'Xin chào!';
        $sentence->save();

        $sentence = new Sentence();
        $sentence->lession_id = 1;
        $sentence->sentence_en = 'My name is Thanh.';
        $sentence->sentence_vn = 'Tôi tên là Thanh.';
        $sentence->save();

        $sentence = new Sentence();
        $sentence->lession_id = 1;
        $sentence->sentence_en = 'I am living in HCM city.';
        $sentence->sentence_vn = 'Tôi sống ở Thành phố Hồ Chí Minh.';
        $sentence->save();

        $sentence = new Sentence();
        $sentence->lession_id = 1;
        $sentence->sentence_en = 'I am a developer.';
        $sentence->sentence_vn = 'Tôi là lập trình viên.';
        $sentence->save();

        $sentence = new Sentence();
        $sentence->lession_id = 1;
        $sentence->sentence_en = 'I am working.';
        $sentence->sentence_vn = 'Tôi đang làm việc.';
        $sentence->save();

        $sentence = new Sentence();
        $sentence->lession_id = 1;
        $sentence->sentence_en = 'My job is sofware engineer.';
        $sentence->sentence_vn = 'Công việc của tôi là kỹ sư phần mềm.';
        $sentence->save();

        $sentence = new Sentence();
        $sentence->lession_id = 1;
        $sentence->sentence_en = 'I have been study Englsh for 15 years.';
        $sentence->sentence_vn = 'Tôi đã học tiếng Anh được 15 năm.';
        $sentence->save();

        $sentence = new Sentence();
        $sentence->lession_id = 1;
        $sentence->sentence_en = 'I am 26 years old.';
        $sentence->sentence_vn = 'Tôi 26 tuổi';
        $sentence->save();

        $sentence = new Sentence();
        $sentence->lession_id = 1;
        $sentence->sentence_en = 'My favorite sport is soccer.';
        $sentence->sentence_vn = 'Môn thể thao yêu thích của tôi là đá banh.';
        $sentence->save();

        $sentence = new Sentence();
        $sentence->lession_id = 1;
        $sentence->sentence_en = 'My favorite food is beefsteak.';
        $sentence->sentence_vn = 'Món ăn yêu thích của tôi là bò beefstake.';
        $sentence->save();

    }
}
