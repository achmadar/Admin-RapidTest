<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestamp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_antrian', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('tb_pasien', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('tb_report', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('tb_rumahsakit', function (Blueprint $table) {
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
        //
    }
}
