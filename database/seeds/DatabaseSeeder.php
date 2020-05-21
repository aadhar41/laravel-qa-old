<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\User::class, 3)->create()->each(function($u) {
            $u->questions()
            ->saveMany(
                factory(App\Question::class, rand(1, 5))->make()
            );
        });
        
    }
}
