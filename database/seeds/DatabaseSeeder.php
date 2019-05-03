<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        // COMPANIES
        DB::table('companies')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Stark Industries', 
        ]);

        DB::table('companies')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Bluth, INC', 
        ]);
        
        // USERS
        DB::table('users')->insert([
            'company_id' => '1',
            'name' => 'Tony Stark',
            'email' =>'tony@gmail.com',
            'password' => bcrypt('test'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'company_id' => '2',
            'name' => 'George Bluth',
            'email' =>'george@bluth.com',
            'password' => bcrypt('test'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // TICKETS
        DB::table('tickets')->insert([
            'name' => 'Happy Hogan',
            'subject' => 'Jarvis is not working', 
            'message' => 'I logged on this morning and he was not responding',
            'status' => '0',
            'company_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tickets')->insert([
            'name' => 'Pepper Potts',
            'subject' => 'Servers are down', 
            'message' => 'Getting a 404 error message when logging on to the system',
            'status' => '1',
            'company_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tickets')->insert([
            'name' => 'Nick Fury',
            'subject' => 'S.H.E.I.L.D. Security Systems Update', 
            'message' => 'Still waiting for our update on the security systems.',
            'status' => '3',
            'company_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tickets')->insert([
            'name' => 'Maria Hill',
            'subject' => 'Cant find my website', 
            'message' => 'I cant find my website. How do I find it?',
            'status' => '0',
            'company_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tickets')->insert([
            'name' => 'Buster Bluth',
            'subject' => 'Out of juice in the break room', 
            'message' => 'We are out of juice. Please refill!',
            'status' => '0',
            'company_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
