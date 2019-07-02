<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->nullable();
            $table->string('page_name')->nullable();
            $table->string('page_url')->nullable();
            $table->text('description')->nullable();
            $table->text('table_contents')->nullable();
            $table->text('methodology')->nullable();
            $table->boolean('featured')->nullable()->default(0);
            $table->boolean('status')->nullable()->default(1);
            $table->string('added_by')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
