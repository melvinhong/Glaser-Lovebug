<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_image')->default('default_user.png');
            // $table->string('age')->nullable();
            // $table->string('location')->nullable();
            // $table->string('ethnic')->nullable();
            // $table->string('haircolor')->nullable();
            // $table->string('eyecolor')->nullable();
            // $table->string('skincolor')->nullable();
            // $table->string('hobbies')->nullable();
            // $table->string('relationship')->nullable();
            // $table->string('occupation')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
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
