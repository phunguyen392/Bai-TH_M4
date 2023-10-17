<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use  App\Models\Note;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $note = new Note();
        $note->category = 'Gas';
        $note->money = 500.000;
        $note->date = '2021-01-01';
        $note->save();
    }
}
