<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractorApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractor_applications', function (Blueprint $table) {
            $table->id();
            $table->string('contractor_name');
            $table->string('contractor_address');
            $table->string('rc_number');
            $table->string('phone');
            $table->string('email');
            $table->text('brief');
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
        Schema::dropIfExists('contractor_applications');
    }
}
