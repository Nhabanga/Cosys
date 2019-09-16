<?php

use Illuminate\Database\Seeder;
use App\user;
class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      user::create([
      	'name' => 'Gil Dos santos',
      	'email' => 'gilnhabanga@gmail.com',
      	'password' => bcrypt('123456789'),  


      ]);  
    }
}
