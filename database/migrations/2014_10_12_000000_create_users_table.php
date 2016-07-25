<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
		
			
		$users = User::select('id', 'name', 'email', 'created_at')->get();
		Excel::create('users', function($excel) use($users) {
		$excel->sheet('Sheet 1', function($sheet) use($users) {
        $sheet->fromArray($users);
		});
		})->export('xls');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
