<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            // tipo_del_dato('nome_colonna', lunghezza_colonna);
            $table->string('company', 64);

            // stazione di partenza
            $table->string('departure_station', 64);

            // stazione di arrivo
            $table->string('arrival_station', 64);

            // orario di partenza
            $table->time('departure_time');

            // orario di arrivo
            $table->time('arrival_time');

            // codice treno
            $table->string('code', 7)->unique(); // 7 perchè il codice dei treni di default è composto da 7 cifre

            // numero carrozze
            $table->unsignedTinyInteger('num_carriages')->nullable();

            // in orario
            $table->boolean('in_time')->default(true);

            // cancellato
            $table->boolean('deleted')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
