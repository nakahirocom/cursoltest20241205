<?php

namespace App\Http\Controllers\Santaku;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QuestionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $questions = Question::getThreeQuestionsAtRandom();
        $questions_q = $questions;//問題用の配列
        $questions_a = $questions;//答え選択肢用の配列

        if($questions[0] === null) {
            // 選択されたジャンルが無いためindex画面へ変遷させる
            return view('santaku.index');
        }

        $question = $questions[0];//シャッフル前に[0]を正解用として$questionに保存する
        shuffle($questions_q);//問題をランダムに出題するためのシャッフル
        shuffle($questions_a);//答えの選択肢をランダムに出題するためのシャッフル

        return view('santaku.question')
            ->with('questions_q', $questions_q)
            ->with('questions_a', $questions_a)
            ->with('question', $question)
            ->with('shuffled0Id', $questions[0]->id)
            ->with('shuffled1Id', $questions[1]->id)
            ->with('shuffled2Id', $questions[2]->id)
            ->with('shuffled3Id', $questions[3]->id)
            ->with('shuffled4Id', $questions[4]->id);
    }
}
