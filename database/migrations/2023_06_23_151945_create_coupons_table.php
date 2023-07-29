<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('discount');
            $table->enum('type', ['Percentage', 'Decimal']);
            $table->char('code', 100);
            $table->boolean('status')->default(0);
            $table->dateTime('start_date');
            $table->dateTime('expire_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('coupons');
    }
};