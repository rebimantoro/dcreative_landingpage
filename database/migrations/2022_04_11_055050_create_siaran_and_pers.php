<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiaranAndPers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siaranandpers', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('subjudul');
            $table->string('gambar');
            $table->longText('artikel');
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
        Schema::dropIfExists('SiaranAndPers');
    }
}
