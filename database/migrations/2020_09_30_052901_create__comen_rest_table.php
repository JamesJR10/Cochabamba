<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComenRestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ComenRest', function (Blueprint $table) {
            $table->id();
            $table->string('calificacion');
            $table->string('comentario');
            $table->foreignId('idUser')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('idLocal')->nullable()->constrained('cochabamba')->onDelete('set null');
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
        Schema::dropIfExists('ComenRest');
    }
}
