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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->decimal("price", 7, 2);
            $table->string("image");
            $table->string('statuscode')->nullable();
            $table->foreignId('property_id');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('unit_status', function (Blueprint $table) {
            $table->bigInteger('unit_id');
            $table->bigInteger('status_id');
            $table->primary(['unit_id', 'status_id']);
            $table->softDeletes();
        });
        // Schema::create('unit_agents', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('unit_id');
        //     $table->foreignId('agent_id');
        //     $table->string('status_unit');
        //     $table->softDeletes();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
