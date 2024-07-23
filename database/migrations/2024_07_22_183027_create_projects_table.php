<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("duration");
            $table->double("date");
            $table->boolean("active");
            $table->json("funders")->nullable();
            $table->json("countries")->nullable();
            $table->json("implementers")->nullable();
            $table->json("collaborators")->nullable();
            $table->json("objectives")->nullable();
            $table->json("investigators")->nullable();
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
        Schema::dropIfExists('projects');
    }
};
