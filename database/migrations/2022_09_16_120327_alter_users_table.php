<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('username')->after('email_verified_at')->nullable();
           
            $table->tinyInteger('roleid')->after('password')->nullable();
            $table->text('designation')->after('roleid')->nullable();
            $table->string('dept_id')->after('designation')->nullable();
            $table->integer('pen')->after('dept_id')->nullable();
            $table->string('glno')->after('pen')->nullable();
            $table->bigInteger('mobile')->after('glno')->nullable();
           
            $table->text('unit')->after('mobile')->nullable();
            $table->boolean('status')->after('unit')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('username');
            
            $table->dropColumn('roleid');
            $table->dropColumn('designation');
            $table->dropColumn('dept_id');
            $table->dropColumn('pen');
            $table->dropColumn('glno');
            $table->dropColumn('mobile');
            
            $table->dropColumn('unit');
            $table->dropColumn('status');
            
        });
    }
}
