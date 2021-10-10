<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetailPenerimaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_detail_penerimaan', function (Blueprint $table) {
            $table->id();
            $table->foreignid('id_terima');
            $table->foreignid('kode_barang');
            $table->integer('harga_hs');
            $table->integer('jumlah_hs');
            $table->string('total_bayar', 200);
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
        Schema::dropIfExists('table_detail_penerimaan');
    }
}
