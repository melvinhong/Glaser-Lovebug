<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserinfoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //

            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('location')->nullable();
            $table->string('ethnic')->nullable();
            $table->string('haircolor')->nullable();
            $table->string('eyecolor')->nullable();
            $table->string('skincolor')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('relationship')->nullable();
            $table->string('occupation')->nullable();

            $table->string('ageper1')->nullable();
            $table->string('ageper2')->nullable();
            $table->string('genderper')->nullable();
            $table->string('locationper')->nullable();
            $table->string('ethnicper')->nullable();
            $table->string('haircolorper')->nullable();
            $table->string('eyecolorper')->nullable();
            $table->string('skincolorper')->nullable();
            $table->string('hobbiesper')->nullable();
            $table->string('relationshipper')->nullable();
            $table->string('occupationper')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
