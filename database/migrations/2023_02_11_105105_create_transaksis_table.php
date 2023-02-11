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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            // USER
            $table->foreignIdFor(App\Models\User::class, 'id_konsumen');
            $table->foreignIdFor(App\Models\User::class, 'id_karyawan');
            // PAKET
            $table->foreignIdFor(App\Models\Paket::class);
            // TIPE BAYAR
            $table->foreignIdFor(App\Models\TipeBayar::class);
            // STATUS
            $table->foreignIdFor(App\Models\Status::class);

            $table->integer('berat');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar')->nullable();
            $table->boolean('status_bayar')->default(false);
            $table->integer('diskon')->default(0);
            $table->integer('total_bayar');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('transaksi');
    }
};
