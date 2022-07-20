<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;


class CreateUsersTable extends Migration
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
            $table->string('full_name');
            $table->string('company_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('company_member')->nullable();
            $table->string('company_start_year')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('cuntry')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role');
            $table->string('created_by')->nullable();
            $table->string('password');
            $table->string('rest_password_code')->nullable();
            $table->string('last_login')->nullable();
            $table->date('dob');
            $table->string('company_logo')->nullable();
            $table->text('avatar');
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
