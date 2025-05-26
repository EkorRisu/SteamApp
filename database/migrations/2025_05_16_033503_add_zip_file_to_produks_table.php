<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddZipFileToProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produks', function (Blueprint $table) {
            $table->string('zip_file')->nullable()->after('platform')->comment('Path file ZIP untuk game');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produks', function (Blueprint $table) {
            $table->dropColumn('zip_file');
        });
    }
}
