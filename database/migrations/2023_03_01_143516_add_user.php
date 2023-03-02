<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //add a new user to the database
        DB::table('users')->insert([
            'name' => 'Justin',
            'email' => 'admin@localhost',
            'password' => '$2y$10$3oqpsyWe8HZ2hVKx74bE1ualBHXtatpvC4fvML4Wf9CfJbzIrMCMm',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
