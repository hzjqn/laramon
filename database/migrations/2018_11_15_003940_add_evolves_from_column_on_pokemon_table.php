<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEvolvesFromColumnOnPokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemon', function (Blueprint $table) {
            //
            $table->integer('evolves_from_id')->nullable();
            $table->renameColumn('evolves', 'evolves_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemon', function (Blueprint $table) {
            //
            $table->dropColumn('evolves_from_id');
            $table->renameColumn('evolves_id', 'evolves');
        });
    }
}
