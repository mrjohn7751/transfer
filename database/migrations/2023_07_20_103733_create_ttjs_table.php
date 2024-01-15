<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTtjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttjs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('birth_date')->nullable();
            $table->string('phone_num');
            $table->string('parent_num')->nullable();
            // $table->string('region')->nullable();
            // $table->mediumText('address')->nullable();
            // $table->integer('facultate_id')->nullable();
            // $table->string('facultate')->nullable();
            // $table->string('cafedra')->nullable();
            $table->text('deriction');
            $table->string('shape');
            $table->string('group');
            $table->integer('course');
            $table->text('deriction2')->nullable();
            $table->string('shape2')->nullable();
            $table->mediumText('details')->nullable();
            $table->text('doc')->nullable();
            $table->integer('check');
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
        Schema::dropIfExists('ttjs');
    }
}
