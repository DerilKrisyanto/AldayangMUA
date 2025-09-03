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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->boolean('statusenabled')->default(false);
            $table->string('name');
            $table->string('phone');
            $table->unsignedBigInteger('service_type')->nullable();
            $table->unsignedBigInteger('additional_type')->nullable();
            $table->date('date');
            $table->time('time');
            $table->text('alamat')->nullable();
            $table->string('alamatmaps')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('statusbookings')->nullable();
            $table->string('totalharga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
