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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nrp');
            $table->string('fakultas');
            $table->string('pilihan1');
            $table->longText('alasan1');
            $table->string('pilihan2');
            $table->longText('alasan2');
            $table->string('idline');
            $table->string('nohp');
            $table->string('cv');
            $table->string('ktm');
            $table->string('fotodiri');
            $table->string('portofolio')->nullable();
            $table->string('essay');
            $table->string('khs');
            $table->string('jadwal1')->nullable();
            $table->string('jadwal2')->nullable();
            $table->string('jadwal3')->nullable();
            $table->string('jadwal4')->nullable();
            $table->string('jadwal5')->nullable();
            $table->string('jadwal6')->nullable();
            $table->string('jadwal7')->nullable();
            $table->string('jadwal8')->nullable();
            $table->string('jadwal9')->nullable();
            $table->dateTime('submited_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
};
