<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('phone')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
        
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('referrer_name');
            $table->string('kin_name');
            $table->string('kin_phone');
            $table->string('account_number');
            $table->string('bank');
            $table->string('date_of_payment');
            $table->string('agree_100k');
            $table->string('agree_10_percent');
            $table->string('agree_no_advert');
            $table->string('agree_no_refund');
            $table->string('agree_not_liable');
            $table->string('agree_required_info');
            $table->string('agree_terms');
            // $table->unsignedBigInteger('referrer')->size(20); check again
            $table->string('passport_url');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
