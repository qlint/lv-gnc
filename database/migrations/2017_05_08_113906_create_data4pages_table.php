<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateData4pagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data4pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->string('name');
            $table->string('img1920');
            $table->string('img1280');
            $table->string('img1024');
            $table->string('img512');
            $table->string('img300');
            $table->string('img1030x288')->nullable();
            $table->text('h1Ttle');
            $table->text('h4Ttle');
            $table->text('desc1');
            $table->text('desc2');
            $table->text('trailer')->nullable();
            $table->text('portal')->nullable();
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
        Schema::dropIfExists('data4pages');
    }
}
