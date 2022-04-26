<?php

use App\Models\Car\Feature;
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
        Schema::create('feature_sale', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Feature::class, 'feature_id');
            $table->foreignIdFor(Sale::class, 'sale_id');
            $table->timestamps();
            $table->unique(['feature_id', 'sale_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_sale');
    }
};
