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
            $table->string('Firstname');
            $table->string('LastName');
            $table->string('DocumentType');
            $table->float('DocumentNumber');
            $table->float('BaseSalary');
            $table->float('SalaryDay');
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
