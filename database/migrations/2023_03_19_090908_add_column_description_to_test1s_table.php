<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDescriptionToTest1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test1s', function (Blueprint $table) {
            $table->string('desctiption', 255)
                ->nullable()
                ->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    // php artisan migrate:rollback
    public function down()
    {
        Schema::table('test1s', function (Blueprint $table) {
            $table->dropColumn('desctiption');
        });
    }
}
