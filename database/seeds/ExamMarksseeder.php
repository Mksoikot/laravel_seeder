<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ExamMarksseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exam_marks')->insert([
            'name' => Str::random(10),
            'marks' => Str::random(10),
            'roll' => Str::random(10),
            'grade' => 'A',

        ]);
    }
}