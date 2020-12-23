<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMybooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mybooks', function (Blueprint $table) {
            $table->id();
            $table->Text('mbook_name');
            $table->Text('mcat');
            $table->string('mwriter_name')->nullable();
            $table->string('mbook_image');
            $table->string('mbook_details');
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
        Schema::dropIfExists('mybooks');
    }
}
