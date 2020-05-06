<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKgbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kgbs', function (Blueprint $table) {
            $table->id();
            $table->char('nip',18)->unique();
            $table->date('tgl_gajian_baru');
            $table->string('gaji_pokok_baru');
            $table->integer('lama_tahun');
            $table->integer('lama_bulan');
            $table->integer('lama_tahun_skg');
            $table->integer('lama_bulan_skg');
            $table->date('tgl_gaji_datang');
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
        Schema::dropIfExists('kgbs');
    }
}
