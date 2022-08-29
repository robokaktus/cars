<?php

use App\Models\Sale\Sale;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_economies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sale::class, 'sale_id');
            $table->unsignedInteger('city_fuel_economy');
            $table->unsignedInteger('road_fuel_economy');
            $table->unsignedInteger('mix_fuel_economy');
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
        Schema::dropIfExists('fuel_economies');
    }
};
