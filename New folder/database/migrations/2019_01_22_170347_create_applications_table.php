<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_no');
            $table->string('job');
            $table->string('address');
            $table->string('marital_status');
            $table->date('dob');
            $table->integer('user_id');
            $table->integer('job_id')->nullable();
            $table->string('age');
            $table->string('illness_history')->nullable();
            $table->string('illness_details')->nullable();
            $table->string('skills');
            $table->string('disability_status');
            $table->string('disability_reg')->nullable();
            $table->date('cert_expiry')->nullable();
            $table->string('court_conviction');
            $table->string('conviction_details')->nullable();
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
        Schema::dropIfExists('applications');
    }
}