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
        Schema::create('crashes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sale::class, 'sale_id');
            $table->boolean('is_front_crash')->default(false);
            $table->boolean('is_rear_crash')->default(false);
            $table->boolean('is_top_crash')->default(false);
            $table->boolean('is_left_crash')->default(false);
            $table->boolean('is_right_crash')->default(false);
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
        Schema::dropIfExists('crashes');
    }
};
