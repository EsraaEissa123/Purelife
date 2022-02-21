<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
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
            $table->string('name');
            $table->string('phone');
            $table->date  ('hiring_date');
            $table->string('insurance_value');
            $table->date  ('insurance_start');
            $table->date  ('insurance_end');
            $table->string('work_hours');
            $table->string('shift');
            $table->string('gender');
            $table->string('personal_id');
            $table->string('visa_num');
            $table->string('retirement_date');
            $table->decimal('salary', $precision = 8, $scale = 2);
            $table->text('papers');
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
        Schema::dropIfExists('employees');
    }
}
