<?php

namespace App\Http\Controllers\Santaku;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Services\SantakuService;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, SantakuService $santakuService)
    {
        $questionId = (int) $request->route('questionId');
        if (!$santakuService->checkOwnMondai($request->user()->id, $questionId)) {
            return redirect()
                ->route('kaizen', ['questionId' => $questionId])
                ->with('feedback.success', 'あなたが作成した問題以外は編集出来ないので、この問題の要望を出しましょう');

            throw new AccessDeniedHttpException();
        }

        $question = Question::where('id', $questionId)->with('mymemo')->firstOrFail();
        //dd($question);
        return view('santaku.edit')->with('question', $question);
    }
}
