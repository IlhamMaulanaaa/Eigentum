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
        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string("company");
            $table->string("company_email")->unique();  
            $table->string("company_password");
            $table->string("address");
            $table->string("license");
            $table->string("telp");
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('developer_provinces', function (Blueprint $table) {
            $table->bigInteger('developer_id');
            $table->bigInteger('province_id');
            $table->primary(['developer_id', 'province_id']);
            $table->softDeletes();
        });

        Schema::create('developer_regencies', function (Blueprint $table) {
            $table->bigInteger('developer_id');
            $table->bigInteger('regency_id');
            $table->primary(['developer_id', 'regency_id']);
            $table->softDeletes();
        });

        Schema::create('developer_districts', function (Blueprint $table) {
            $table->bigInteger('developer_id');
            $table->bigInteger('district_id');
            $table->primary(['developer_id', 'district_id']);
            $table->softDeletes();
        });

        Schema::create('developer_villages', function (Blueprint $table) {
            $table->bigInteger('developer_id');
            $table->bigInteger('village_id');
            $table->primary(['developer_id', 'village_id']);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developers');
    }
};
