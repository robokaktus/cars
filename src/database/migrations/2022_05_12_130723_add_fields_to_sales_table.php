<?php

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
        Schema::table('sales', function (Blueprint $table) {
            $table->boolean('is_hide_state_number')->after('state_number')->default(false)->index();
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->boolean('is_hide_vin_number')->after('vin_number')->default(false)->index();
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->boolean('telegram')->after('phone_number')->nullable();
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->boolean('email')->after('telegram')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->dropColumn([
                'is_hide_state_number',
                'is_hide_vin_number',
                'telegram',
                'email'
            ]);
        });
    }
};
