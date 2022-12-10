<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('location')->nullable();
            $table->string('salary')->nullable();
            $table->string('company')->nullable();
            $table->string('job_category')->nullable();

            $table->json('job_desks')->nullable();
            $table->json('requirements')->nullable();
            $table->json('benefits')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');
    }
};
