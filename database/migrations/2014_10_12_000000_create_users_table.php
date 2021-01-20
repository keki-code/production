<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('unit_oib', 11)->unique();
            $table->string('unit_name');
            
            $table->foreignId('county_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null');
            $table->foreignId('material_supplier_id')->constrained();
            $table->foreignId('supplier_id')->constrained();
            $table->foreignId('material_consumption_id')->constrained();
            $table->foreignId('location_id')->constrained();
            
            /* created_at, updated_at */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
