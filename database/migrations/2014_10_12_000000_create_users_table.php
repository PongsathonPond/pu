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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('relevant');
            $table->string('name_pat');
            $table->string('age_pat');
            $table->string('hn');
            $table->timestamps();
        });

        Schema::create('asn_form1s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('f1')->nullable();
            $table->string('f1_2')->nullable();
            $table->string('f1_3')->nullable();
            $table->string('f2')->nullable();
            $table->string('f3_1')->nullable();
            $table->string('f3_2')->nullable();
            $table->string('f3_3')->nullable();
            $table->string('f4_1')->nullable();
            $table->string('f4_2')->nullable();
            $table->string('f5')->nullable();
            $table->string('f6_1')->nullable();
            $table->string('f6_2')->nullable();
            $table->string('f6_3')->nullable();
            $table->string('f6_4')->nullable();
            $table->string('f6_5')->nullable();
            $table->string('f7_1')->nullable();
            $table->string('f7_2')->nullable();
            $table->string('f7_3')->nullable();
            $table->string('f7_4')->nullable();
            $table->string('sumtotal')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->timestamps();
        });

        Schema::create('asnForm2', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('f1');
            $table->string('f2');
            $table->string('f3');
            $table->string('f4');
            $table->string('f5');
            $table->string('f6');
            $table->string('f7');
            $table->string('f8');
            $table->string('f9');
            $table->string('f10');
            $table->string('sumtotal');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('patient');
        Schema::dropIfExists('asnForm1');
        Schema::dropIfExists('asnForm2');
    }
};
