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
            $table->integer('phone_num');
            $table->integer('parent_num');
            // $table->string('region')->nullable();
            // $table->mediumText('address')->nullable();
            // $table->integer('facultate_id')->nullable();
            // $table->string('facultate')->nullable();
            // $table->string('cafedra')->nullable();
            $table->text('deriction');
            $table->string('shape');
            $table->string('group');
            $table->integer('course');
            $table->text('deriction2');
            $table->string('shape2');
            $table->mediumText('details')->nullable();
            $table->text('doc');
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
