<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allbooks', function (Blueprint $table) {
            $table->id();
            $table->Text('book_name');
            $table->Text('cat');
            $table->string('writer_name')->nullable();
            $table->string('book_image');
            $table->string('book_details');
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
        Schema::dropIfExists('allbooks');
    }
}
