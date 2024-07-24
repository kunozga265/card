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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->integer("page_area_id");
            $table->text("visitor_id");
            $table->string("ip");
            $table->string("city")->nullable();
            $table->string("region")->nullable();
            $table->string("country")->nullable();
            $table->string("loc")->nullable();
            $table->string("org")->nullable();
            $table->string("postal")->nullable();
            $table->string("timezone")->nullable();
            $table->string("platform")->nullable();
            $table->string("path")->nullable();
            $table->string("method")->nullable();
            $table->string("comments")->nullable();
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
        Schema::dropIfExists('visits');
    }
};
