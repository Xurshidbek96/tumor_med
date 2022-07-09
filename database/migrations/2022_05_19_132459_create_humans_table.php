<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humans', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->date('date')->nullable();
            $table->string('gender')->nullable();
            $table->string('region')->nullable();
            $table->string('district')->nullable();
            $table->string('diagnos')->nullable();
            $table->string('type_disease')->nullable();
            $table->string('psr')->nullable();
            $table->string('alt')->nullable();
            $table->string('act')->nullable();
            $table->string('billirubin')->nullable();
            $table->string('ishqor')->nullable();
            $table->string('timol')->nullable();
            $table->string('igg')->nullable();
            $table->string('igm')->nullable();
            $table->string('result')->nullable();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('humans');
    }
}
