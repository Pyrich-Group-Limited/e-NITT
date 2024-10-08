<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD
            $table->integer('branch_id');
            $table->string('name');
            $table->integer('created_by');
=======
            $table->integer('branch_id')->nullable();
            $table->string('name');
            $table->integer('created_by')->nullable();
>>>>>>> james
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
        Schema::dropIfExists('departments');
    }
}
