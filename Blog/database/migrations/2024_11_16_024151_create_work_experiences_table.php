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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id(); 
            // $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('user_id')->constrained()->cascadeOnUpdate();
            // $table->foreignIdFor(User::class); same with user_id
            $table->string('company');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('role');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
