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
        if (!Schema::hasTable('indicators'))
        {
            Schema::create(
                'indicators', function (Blueprint $table){
                $table->bigIncrements('id');
                $table->integer('branch')->default(0);
                $table->integer('department')->default(0);
                $table->integer('designation')->default(0);
                $table->string('rating')->nullable();
                $table->integer('customer_experience')->default(0);
                $table->integer('marketing')->default(0);
                $table->integer('administration')->default(0);
                $table->integer('professionalism')->default(0);
                $table->integer('integrity')->default(0);
                $table->integer('attendance')->default(0);
                $table->integer('workspace')->nullable();
                $table->integer('created_by')->default(0);
                $table->timestamps();
            }
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicators');
    }
};
