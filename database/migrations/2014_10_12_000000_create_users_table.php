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
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('age');
            $table->string('address');
            $table->string('relevant');
            $table->string('title_pat');
            $table->string('firstname_pat');
            $table->string('lastname_pat');
            $table->string('age_pat');
            $table->string('hn');
            $table->string('auth');
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
            $table->string('auth');
            $table->string('sumtotal')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('asn_form2s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->string('f1')->nullable();
            $table->string('f2')->nullable();
            $table->string('f3')->nullable();
            $table->string('f4')->nullable();
            $table->string('f5')->nullable();
            $table->string('f6')->nullable();
            $table->string('f7')->nullable();
            $table->string('f8')->nullable();
            $table->string('f9')->nullable();
            $table->string('f10')->nullable();
            $table->string('sumtotal');
            $table->string('auth');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');;
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
