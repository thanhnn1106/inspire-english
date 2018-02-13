<?php

use Illuminate\Database\Seeder;
use App\Qasentence;

class QasentenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qasentence = new Qasentence();
        $qasentence->lession_id = 1;
        $qasentence->question = 'Hello, what is your name?';
        $qasentence->answer_1 = 'I like to eat pizza.';
        $qasentence->answer_2 = 'I am David.';
        $qasentence->answer_3 = 'David is from Hawaii.';
        $qasentence->save();

        $qasentence = new Qasentence();
        $qasentence->lession_id = 1;
        $qasentence->question = 'Hello, How are you?';
        $qasentence->answer_1 = 'I am fine. And you?';
        $qasentence->answer_2 = 'I am a developer';
        $qasentence->answer_3 = 'I am 26 years old.';
        $qasentence->save();

        $qasentence = new Qasentence();
        $qasentence->lession_id = 1;
        $qasentence->question = 'Hello, what is your favorite sport?';
        $qasentence->answer_1 = 'Soccer.';
        $qasentence->answer_2 = 'Pizza.';
        $qasentence->answer_3 = 'Flower.';
        $qasentence->save();

        $qasentence = new Qasentence();
        $qasentence->lession_id = 1;
        $qasentence->question = 'Hello, Where are you from?';
        $qasentence->answer_1 = 'I am from Viet Nam.';
        $qasentence->answer_2 = 'I am David.';
        $qasentence->answer_3 = 'I am very happy.';
        $qasentence->save();
    }
}
