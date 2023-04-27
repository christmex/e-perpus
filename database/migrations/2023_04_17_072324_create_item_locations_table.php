<?php

use App\Models\ItemLocation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item_locations', function (Blueprint $table) {
            $table->id();
            $table->string('item_location_name');
            $table->string('item_location_label')->nullable();
            $table->text('item_location_descriptions')->nullable();
            // $table->foreignIdFor(ItemLocation::class,'item_location_parent_id')->nullable()->nullOnDelete();
            // $table->foreignId('item_location_parent_id')->nullable()->references('id')->on('item_locations')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_locations');
    }
};
