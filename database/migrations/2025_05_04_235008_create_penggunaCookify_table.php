<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        
        // Schema::create('pengguna', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('password');
        //     $table->enum('role', ['admin', 'kontributor', 'user'])->default('user');
        //     $table->timestamps();
        // });

        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('resep', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade');
            $table->string('judul');
            $table->integer('cooking_time');
            $table->text('description')->nullable();
            $table->text('steps');
            $table->string('photo')->nullable();
            $table->timestamps();
        });

        Schema::create('bahan_bahan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('resep_bahan_bahan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resep_id')->constrained('resep')->onDelete('cascade');
            $table->foreignId('bahan_bahan_id')->constrained('bahan_bahan')->onDelete('cascade');
            $table->timestamps();
        });

        // Schema::create('komentar', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('resep_id')->constrained('resep')->onDelete('cascade');
        //     $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        //     $table->text('isi_komentar');
        //     $table->tinyInteger('rating')->nullable(); // 1-5 bintang
        //     $table->timestamps();
        // });

        // Schema::create('favorit_resep', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        //     $table->foreignId('resep_id')->constrained('resep')->onDelete('cascade');
        //     $table->timestamps();
        // });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('favorit_resep');
        // Schema::dropIfExists('komentar');
        Schema::dropIfExists('resep_bahan_bahan');
        Schema::dropIfExists('bahan_bahan');
        Schema::dropIfExists('resep');
        Schema::dropIfExists('kategori');
        // Schema::dropIfExists('pengguna');
    }
};
