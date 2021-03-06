<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')){
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('email')->unique();
                $table->string('password',255);
                $table->string('first_name',25);
                $table->string('last_name',25)->nullable();
                $table->enum('role',['User','Admin']);
                $table->string('major',100)->nullable();
                $table->string('phone',10)->nullable();
                $table->string('profilePath',400)->nullable();
                $table->string('description')->nullable();
                $table->string('school')->nullable();
                $table->enum('gender',['Male','Female'])->nullable();
                $table->integer('reputation');
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
