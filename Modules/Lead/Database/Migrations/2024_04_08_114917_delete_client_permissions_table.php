<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('client_permissions');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('client_permissions', function (Blueprint $table) {
            // Define table schema if you want to recreate the table on rollback
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('deal_id');
            $table->string('permissions')->nullable();
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('deal_id')->references('id')->on('deals')->onDelete('cascade');
            $table->timestamps();
        });
    }
};
