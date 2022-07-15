<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('NameDepartment');
            $table->unsignedBigInteger('employee_Id');
            $table->foreign('employee_Id')->references('id')->on('employees')->onDelete('cascade');
            $table->timestamps();
        });
    }






    public function down()
    {
        Schema::dropIfExists('areas');
    }
};
