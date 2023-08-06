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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            // $table->string("name");
            // $table->string("email")->unique();
            // $table->string("password");
            $table->string("address");
            $table->string("ktp");
            $table->string("face");
            $table->string("telp");
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('agent_provinces', function (Blueprint $table) {
            $table->bigInteger('agent_id');
            $table->bigInteger('province_id');
            $table->primary(['agent_id', 'province_id']);
            $table->softDeletes();
        });

        Schema::create('agent_regencies', function (Blueprint $table) {
            $table->bigInteger('agent_id');
            $table->bigInteger('regency_id');
            $table->primary(['agent_id', 'regency_id']);
            $table->softDeletes();
        });

        Schema::create('agent_districts', function (Blueprint $table) {
            $table->bigInteger('agent_id');
            $table->bigInteger('district_id');
            $table->primary(['agent_id', 'district_id']);
            $table->softDeletes();
        });

        Schema::create('agent_villages', function (Blueprint $table) {
            $table->bigInteger('agent_id');
            $table->bigInteger('village_id');
            $table->primary(['agent_id', 'village_id']);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
