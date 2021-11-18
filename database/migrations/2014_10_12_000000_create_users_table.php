<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    
    
    // id bigint(20) NOT NULL
    // about text NULL
    // account_level varchar(255) NULL
    // account_number varchar(255) NULL
    // address varchar(255) NULL
    // birth_date datetime NOT NULL
    // certification text NULL
    // city varchar(255) NULL
    // created_at datetime NULL
    // directory varchar(255) NULL
    // email varchar(255) NULL
    // filename varchar(255) NULL
    // first_name varchar(255) NULL
    // full_path varchar(255) NULL
    // gender varchar(255) NULL
    // is_pazepro varchar(255) NULL
    // is_premium varchar(255) NULL
    // last_name varchar(255) NULL
    // middle_name varchar(255) NULL
    // mobile_number varchar(255) NULL
    // modified_at datetime NULL
    // password varchar(255) NULL
    // path varchar(255) NULL
    // pazepro_level varchar(255) NULL
    // province varchar(255) NULL
    // status varchar(255) NULL
    // type varchar(255) NULL
    // username varchar(255) NULL
    // wallet_balance decimal(25,2) NULL
    // zip_code varchar(255) NULL
    // pazeground_id bigint(20) NULL
    // paze_ground_level varchar(255) NULL
    // bio varchar(255) NULL
    // points int(11) NULL
    // email_confirmation bit(1) NULL 
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->nullable();
            $table->string('about')->nullable();
            $table->string('account_level')->nullable();
            $table->string('account_number')->nullable();
            $table->date('birth_date')->nullable();
            $table->text('certification')->nullable();
            $table->string('city')->nullable();
            $table->string('barangay')->nullable();
            $table->string('email')->nullable();
            $table->string("directory")->nullable();
            $table->string("file_name")->nullable();
            $table->string("full_path")->nullable();
            $table->string("directory_banner")->nullable();
            $table->string("file_name_banner")->nullable();
            $table->string("full_path_banner")->nullable();
            $table->string('first_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('is_pazepro')->nullable();
            $table->string('is_premium')->nullable()->default('false');
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('password')->nullable();
            $table->string('pazepro_level')->nullable();
            $table->string('province')->nullable();
            $table->string('status')->nullable()->default('in-active');
            $table->string('type')->nullable();
            $table->string('username')->nullable();
            $table->string('wallet_balance')->nullable();
            $table->string('wallet_current')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('pazeground_id')->nullable();
            $table->string('paze_ground_level')->nullable();
            $table->string('bio')->nullable();
            $table->integer('points')->nullable();
            $table->string('email_confirmation')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
