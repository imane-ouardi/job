<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->longText('description');
            $table->string('type');
            $table->string('location')->nullable();
            $table->decimal('salary', 10, 2)->nullable();
            $table->char('currency', 3)->default('USD');             
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->date('deadline')->nullable();
            $table->string('created_by_email')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
