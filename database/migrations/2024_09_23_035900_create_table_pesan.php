<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_pesan', function (Blueprint $table) {
            $table->id();
            $table->foreignId("freelance_id")->constrained("table_freelance");
            $table->foreignId("jasa_id")->constrained("table_jasa");
            $table->date('tanggal');
            $table->decimal('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pesan');
    }
};
