<?php

use App\Models\Car\BodyType;
use App\Models\Car\Brand;
use App\Models\Car\Model;
use App\Models\User;
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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Brand::class, 'brand_id');
            $table->foreignIdFor(Model::class, 'model_id');
            $table->foreignIdFor(BodyType::class, 'body_type_id');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('old_price')->nullable();
            $table->year('manufactured_at');
            $table->string('version')->nullable();
            $table->string('state_number')->index();
            $table->string('vin_number')->index();
            $table->string('city_id');
            $table->unsignedInteger('engine_capacity');
            $table->unsignedInteger('horsepower');
            $table->unsignedInteger('mileage');
            $table->unsignedInteger('phone_number')->index();
            $table->foreignIdFor(User::class, 'user_id')->index();
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
        Schema::dropIfExists('sales');
    }
};
