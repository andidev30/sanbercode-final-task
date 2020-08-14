<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarpertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentarpertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('pertanyaan_id');
            $table->longtext('isikomentarpertanyaan');
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profile');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentarpertanyaan');
    }
}
