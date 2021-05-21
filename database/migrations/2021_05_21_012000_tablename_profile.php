<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablenameProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('firstname', 25);
            $table->string('lastname', 25);
            $table->enum('gender', ['L', 'P']);
            $table->enum('kota', ['Jakarta', 'Bogor', 'Tangerang', 'Bekasi']);
            $table->uuid('created_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
