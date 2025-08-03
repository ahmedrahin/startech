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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable()->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->nullable()->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('subcategory_id')->nullable()->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('subsubcategory_id')->nullable()->constrained()->onDelete('cascade');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->decimal('base_price', 8, 2)->default(0);
            $table->unsignedInteger('discount_option')->nullable()->comment('1=No Discount, 2=Percentage %, 3=Fixed Price');
            $table->decimal('discount_percentage_or_flat_amount', 5, 2)->nullable();
            $table->decimal('discount_amount', 8, 2)->nullable();
            $table->decimal('offer_price', 8, 2)->default(0);
            $table->unsignedInteger('quantity')->default(0);
            $table->text('sku_code')->nullable();
            $table->text('video_link')->nullable();
            $table->unsignedInteger('status')->default(1)->comment('0=Inactive, 1=Active, 2=Draft, 3=Scheduled');
            $table->timestamp('publish_at')->nullable()->comment('Scheduled publish date');
            $table->timestamp('expire_date')->nullable()->comment('Scheduled expire date');
            $table->text('thumb_image')->nullable();
            $table->text('back_image')->nullable();
            $table->enum('free_shipping', ['yes', 'no'])->default('no')->comment('yes or no');
            $table->boolean('is_new')->default(2)->comment('1=yes or 2=no');
            $table->boolean('is_featured')->default(2)->comment('1=Yes, 2=No');
            $table->longText('key_feature')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
