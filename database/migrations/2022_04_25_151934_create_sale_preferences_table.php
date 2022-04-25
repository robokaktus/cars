<?php

use App\Models\Car\TechnicalCondition;
use App\Models\Paint\Condition;
use App\Models\Paint\Paint;
use App\Models\Paint\Type;
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
        Schema::create('sale_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sale::class, 'sale_id');
            $table->text('description')->nullable();
            $table->foreignIdFor(Paint::class, 'paint_id');
            $table->foreignIdFor(Type::class, 'paint_type_id');
            $table->foreignIdFor(Condition::class, 'paint_condition_id');
            $table->foreignIdFor(TechnicalCondition::class, 'technical_condition_id');
            $table->string('delivered_from_iso')->nullable();
            $table->boolean('is_cleared_through_customs')->default(true);
            $table->boolean('is_traded')->default(false);
            $table->boolean('is_exchanged')->default(false);
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
        Schema::dropIfExists('sale_preferences');
    }
};
