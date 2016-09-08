<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Instances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vmid');
            $table->string('ip');
            $table->string('instance_name');
            $table->text('description');
            $table->string('branch_name');
            $table->text('log');
            $table->string('instance_status');
            $table->dateTime('created');
            $table->dateTime('updated');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('instance_creating');

    }
}
