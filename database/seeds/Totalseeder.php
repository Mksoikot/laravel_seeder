<?php

use Illuminate\Database\Seeder;

class Totalseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            studentsSeeder::class,
            ExamMarksseeder::class,
        ]);
    }
}
