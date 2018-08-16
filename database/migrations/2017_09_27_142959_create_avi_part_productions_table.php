<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAviPartProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avi_part_productions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('part_number');
            $table->string('part_number_ag')->nullable();
            $table->string('part_number_kanban')->nullable();
            $table->string('line_number')->nullable();
            $table->string('line_number_ag')->nullable();
            $table->string('back_number')->nullable();
            $table->float('qty_kanban');
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
        Schema::dropIfExists('avi_part_productions');
    }
}
