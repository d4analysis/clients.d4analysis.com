<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('investigations', function (Blueprint $table) {
          $table->dropColumn('value');
          $table->dropColumn('purchased_at');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('investigations', function (Blueprint $table) {
          $table->integer('value');
          $table->date('purchased_at');
      });
    }
}
