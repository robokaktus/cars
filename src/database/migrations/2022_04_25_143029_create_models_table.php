<?php

use App\Models\Car\Brand;
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
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Brand::class, 'brand_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->date('started_at')->nullable();
            $table->date('ended_at')->nullable();
            $table->unsignedInteger('priority')->index()->default(0);
            $table->timestamps();
            $table->unique(['brand_id', 'slug', 'started_at', 'ended_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models');
    }
};
