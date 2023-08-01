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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->string("address");
            $table->foreignId('developer_id');
            $table->foreignId('type_id');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('property_agent', function (Blueprint $table) {
            $table->bigInteger('property_id');
            $table->bigInteger('agent_id');
            $table->primary(['property_id', 'agent_id']);
            $table->softDeletes();
        });

        Schema::create('property_province', function (Blueprint $table) {
            $table->bigInteger('property_id');
            $table->bigInteger('province_id');
            $table->primary(['property_id', 'province_id']);
            $table->softDeletes();
        });
    
        Schema::create('property_regency', function (Blueprint $table) {
            $table->bigInteger('property_id');
            $table->bigInteger('regency_id');
            $table->primary(['property_id', 'regency_id']);
            $table->softDeletes();
        });
    
        Schema::create('property_district', function (Blueprint $table) {
            $table->bigInteger('property_id');
            $table->bigInteger('district_id');
            $table->primary(['property_id', 'district_id']);
            $table->softDeletes();
        });
    
        Schema::create('property_village', function (Blueprint $table) {
            $table->bigInteger('property_id');
            $table->bigInteger('village_id');
            $table->primary(['property_id', 'village_id']);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
