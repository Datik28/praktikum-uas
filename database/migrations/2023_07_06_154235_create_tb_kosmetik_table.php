<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKosmetikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kosmetik', function (Blueprint $table) {
            $table->increments('kosmetik_id');
            $table->string('kosmetik_kode');
            $table->string('kosmetik_nama');
            $table->string('kosmetik_merk');
            $table->string('kosmetik_harga');
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
        Schema::dropIfExists('tb_kosmetik');
    }
}
