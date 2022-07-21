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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('DocumentType');
            $table->String('DocumentNumber');
            $table->bigInteger('BaseSalary');
            $table->bigInteger('SalaryDay');
            $table->string('Position');
            $table->string('Department');
            $table->string('EPS');
            $table->string('AFD');
            $table->string('ARL');
            $table->string('Status');
            $table->timestamps();
        });
    }







    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
