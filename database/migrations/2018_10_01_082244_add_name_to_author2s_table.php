<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameToAuthor2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('author2s', function(Blueprint $table) {
            $table->string('name')->after('email')->nullable(); // nullable()은 NULL 을 허용한다는 얘기
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('author2s', function(Blueprint $table) {
            $table->dropColumn('name');
        });
    }
}
