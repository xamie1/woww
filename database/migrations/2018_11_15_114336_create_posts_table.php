<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
             $table->increments('id');
            $table->string('user_id')->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');
            $table->string('crime');
            $table->mediumText('description');
            $table->string('where_it_happened');
            $table->string('duration');
            $table->string('nature');
            $table->string('status');
            $table->string('physical_abuse');
            $table->string('gender_of_attacker');
            $table->string('relation_to_attacker');
            $table->string('context');
            $table->string('reported');
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
        Schema::dropIfExists('posts');
    }
}
