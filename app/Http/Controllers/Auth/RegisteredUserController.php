<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\MiddleLabel;
use App\Models\LabelStorages;
use App\Providers\RouteServiceProvider;
use App\Mail\NewUserIntroduction;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Contracts\Mail\Mailer;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, Mailer $mailer)
    {


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($newUser));

        Auth::login($newUser);

        //新規登録した自身のuseridを取得する
        $id = auth()->id();

        //MiddleLabelテーブルの全てのデータ(中分類)を$middlelabelNewListに保存する
        $middleLabelNewList = MiddleLabel::all();

        //LabelStoragesテーブルの[user_id=全て自分の$id][large_label_id=ミドルラベルから][middle_label_id=全てのid][selected=全て1]
        foreach ($middleLabelNewList as $item) {
            $selectNewList = new LabelStorages();
            $selectNewList->user_id = $id; // ここでUserIdを保存している　❌ =$id();
            $selectNewList->large_label_id = $item->large_label_id; //large_label_idを登録
            $selectNewList->middle_label_id = $item->id; //middle_label_idを登録
            $selectNewList->selected = 1; //中分類を選んだ状態の「１」を登録
            $selectNewList->save();
        }

        //メールの送信処理を追加
        $allUser = User::get();
        foreach ($allUser as $user) {
            $mailer->to($user->email)
            ->send(new NewUserIntroduction($user, $newUser));
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
