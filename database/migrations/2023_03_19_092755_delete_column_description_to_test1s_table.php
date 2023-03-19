<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumnDescriptionToTest1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test1s', function (Blueprint $table) {
            $table->dropColumn('desctiption');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('test1s', function (Blueprint $table) {
            $table->string('desctiption', 255)
                ->nullable()
                ->after('email');
        });
    }
}
