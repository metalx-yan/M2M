<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_tag', function (Blueprint $table) {
          $table->unsignedInteger('buku_id');
          $table->foreign('buku_id')->references('id')->on('bukus');
          $table->unsignedInteger('tag_id');
          $table->foreign('tag_id')->references('id')->on('tags');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // $table->dropIfExists('buku_id');
        // $table->dropIfExists('tag_id');

    }
}
