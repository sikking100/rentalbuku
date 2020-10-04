<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_books');
            $table->bigInteger('days');
            $table->string('status');
            $table->timestamps();

            $table->primary(['id_users', 'id_books']);

            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_books')->references('id')->on('books')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rentals', function (Blueprint $table)
        {
            $table->dropForeign('rentals_id_users_foreign');
            $table->dropForeign('rentals_id_books_foreign');
        });
        Schema::dropIfExists('rentals');
    }
}
