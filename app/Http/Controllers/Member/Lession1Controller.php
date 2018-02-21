<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vocabulary;
use App\Sentence;
use App\Qasentence;
use App\Countries;
use App\Alphabet;
use App\Question;

class Lession1Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function vocabulary()
    {
        $lessionId = 1;
        $vocaList = Vocabulary::getVocabularyByLessionId($lessionId);

        return view('member.vocabulary', ['vocaList' => $vocaList]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function introduction()
    {
        $lessionId = 1;
        $introSentenceList = Sentence::getSentenceByLessionId($lessionId);

        return view('member.introduction', ['introSentenceList' => $introSentenceList]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function introductionPractice()
    {
        $lessionId = 1;
        $qaSentenceList = Qasentence::getQaSentenceByLessionId($lessionId);

        return view('member.introduction_practice', ['qaSentenceList' => $qaSentenceList]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function country()
    {
        $lessionId = 1;
        $countryList = Countries::getcountryListByLessionId($lessionId);

        return view('member.country', ['countryList' => $countryList]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function nationality()
    {
        $lessionId = 1;
        $countryList = Countries::getcountryListByLessionId($lessionId);

        return view('member.nationality', ['countryList' => $countryList]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function countrySpeaking()
    {
        $lessionId = 1;
        $introSentenceList = Sentence::getSentenceByLessionId($lessionId);

        return view('member.country_speaking', ['introSentenceList' => $introSentenceList]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function alphabetSound()
    {
        $lessionId = 1;
        $alphabetList = Alphabet::getAlphabetByLessionId($lessionId);

        return view('member.alphabet_sound', ['alphabetList' => $alphabetList]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function question()
    {
        $lessionId = 1;
        $questionList = Question::getQuestionByLessionId($lessionId);

        return view('member.question', ['questionList' => $questionList]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function howYouSound()
    {

        return view('member.how_you_sound');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function review()
    {
        return view('member.review');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function reviewListening()
    {
        return view('member.review_listening');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function reviewAnswerQuestion()
    {
        return view('member.review_answer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function feedback()
    {

        return view('member.feedback');
    }

}
