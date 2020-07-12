<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employer_id');
            $table->string('company_name');
            $table->string('company_website');
            $table->string('company_email');
            $table->string('job_category');
            $table->mediumText('company_logo')->nullable();
            $table->string('job_title');
            $table->string('job_type');
            $table->string('job_salary');
            $table->string('job_location');
            $table->string('job_description');
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
        Schema::dropIfExists('jobs');
    }
}
