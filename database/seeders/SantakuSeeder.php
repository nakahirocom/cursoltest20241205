<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Santaku;

class SantakuSeeder extends Seeder
{
    public function run()
    {
        Santaku::create([
            'user_id' => 1,
            'question' => '1×1=',
            'answer' => 1,
            'comment' => 'イチカケルイチハイチ',
        ]);
        Santaku::create([
            'user_id' => 1,
            'question' => '1×2=',
            'answer' => 2,
            'comment' => 'イチカケルニハニ',
        ]);
        Santaku::create([
            'user_id' => 1,
            'question' => '1×3=',
            'answer' => 3,
            'comment' => 'イチカケルサンハサン',
        ]);
        Santaku::create([
            'user_id' => 1,
            'question' => '1×4=',
            'answer' => 4,
            'comment' => 'イチカケルヨンハヨン',
        ]);
        Santaku::create([
            'user_id' => 1,
            'question' => '1×5=',
            'answer' => 5,
            'comment' => 'イチカケルゴハゴ',
        ]);
        Santaku::create([
            'user_id' => 1,
            'question' => '1×6=',
            'answer' => 6,
            'comment' => 'イチカケルロクハロク',
        ]);
        Santaku::create([
            'user_id' => 1,
            'question' => '1×7=',
            'answer' => 7,
            'comment' => 'イチカケルナナハナナ',
        ]);
        Santaku::create([
            'user_id' => 1,
            'question' => '1×8=',
            'answer' => 8,
            'comment' => 'イチカケルハチハハチ',
        ]);
        Santaku::create([
            'user_id' => 1,
            'question' => '1×9=',
            'answer' => 9,
            'comment' => 'イチカケルキュウハキュウ',
        ]);
        Santaku::create([
            'user_id' => 2,
            'question' => '2×1=',
            'answer' => 2,
            'comment' => 'ニカケルイチハニ',
        ]);
        Santaku::create([
            'user_id' => 2,
            'question' => '2×2=',
            'answer' => 4,
            'comment' => 'ニカケルニハヨン',
        ]);
        Santaku::create([
            'user_id' => 2,
            'question' => '2×3=',
            'answer' => 6,
            'comment' => 'ニカケルサンハロク',
        ]);
        Santaku::create([
            'user_id' => 2,
            'question' => '2×4=',
            'answer' => 8,
            'comment' => 'ニカケルヨンハハチ',
        ]);
        Santaku::create([
            'user_id' => 2,
            'question' => '2×5=',
            'answer' => 10,
            'comment' => 'ニカケルゴハジュウ',
        ]);
        Santaku::create([
            'user_id' => 2,
            'question' => '2×6=',
            'answer' => 12,
            'comment' => 'ニカケルロクハジュウニ',
        ]);
        Santaku::create([
            'user_id' => 2,
            'question' => '2×7=',
            'answer' => 14,
            'comment' => 'ニカケルナナハジュウヨン',
        ]);
        Santaku::create([
            'user_id' => 2,
            'question' => '2×8=',
            'answer' => 16,
            'comment' => 'ニカケルハチハジュウロク',
        ]);
        Santaku::create([
            'user_id' => 2,
            'question' => '2×9=',
            'answer' => 18,
            'comment' => 'ニカケルキュウハジュウハチ',
        ]);

    }
}
