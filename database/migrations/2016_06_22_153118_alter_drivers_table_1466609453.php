<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDriversTable1466609453 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drivers', function(Blueprint $table) {
            $table->smallInteger('age');
            $table->text('phone');
            $table->text('address');
            $table->mediumText('zip');
            $table->text('social');
            $table->text('bank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drivers', function(Blueprint $table) {
            $table->dropColumn('age');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('zip');
            $table->dropColumn('social');
            $table->dropColumn('bank');
        });
    }
}
