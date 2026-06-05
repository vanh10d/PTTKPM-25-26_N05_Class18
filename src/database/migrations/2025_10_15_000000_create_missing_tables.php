<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // ── Categories ──
        if (!Schema::hasTable('categories')) {
            Schema::create('categories', function (Blueprint $table) {
                $table->string('category_id')->primary();
                $table->string('name');
                $table->timestamps();
            });
        }

        // ── Suppliers ──
        if (!Schema::hasTable('suppliers')) {
            Schema::create('suppliers', function (Blueprint $table) {
                $table->string('supplier_id')->primary();
                $table->string('name');
                $table->string('contact_name')->nullable();
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                $table->string('address')->nullable();
                $table->string('country')->nullable();
                $table->timestamps();
            });
        }

        // ── Carts ──
        if (!Schema::hasTable('carts')) {
            Schema::create('carts', function (Blueprint $table) {
                $table->string('cart_id')->primary();
                $table->string('user_id');
                $table->timestamps();
            });
        }

        // ── Cart Items ──
        if (!Schema::hasTable('cart_items')) {
            Schema::create('cart_items', function (Blueprint $table) {
                $table->string('cart_item_id')->primary();
                $table->string('cart_id');
                $table->string('product_id');
                $table->integer('quantity')->default(1);
                $table->timestamps();
            });
        }

        // ── Orders ──
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->string('order_id')->primary();
                $table->string('user_id');
                $table->decimal('total_amount', 15, 2)->default(0);
                $table->string('status')->default('pending');
                $table->string('payment_status')->default('unpaid');
                $table->text('shipping_address')->nullable();
                $table->timestamp('created_at')->nullable();
            });
        }

        // ── Order Items ──
        if (!Schema::hasTable('order_items')) {
            Schema::create('order_items', function (Blueprint $table) {
                $table->string('order_item_id')->primary();
                $table->string('order_id');
                $table->string('product_id');
                $table->integer('quantity')->default(1);
                $table->decimal('unit_price', 15, 2)->default(0);
            });
        }

        // ── Order Discounts ──
        if (!Schema::hasTable('order_discounts')) {
            Schema::create('order_discounts', function (Blueprint $table) {
                $table->id('order_discount_id');
                $table->string('order_id');
                $table->string('discount_id');
            });
        }

        // ── Product Reviews ──
        if (!Schema::hasTable('product_reviews')) {
            Schema::create('product_reviews', function (Blueprint $table) {
                $table->string('review_id')->primary();
                $table->string('product_id');
                $table->string('user_id');
                $table->string('order_id')->nullable();
                $table->tinyInteger('rating')->default(5);
                $table->text('comment')->nullable();
                $table->string('image_url')->nullable();
                $table->string('status', 50)->default('pending');
                $table->timestamps();
            });
        }

        // ── Support Tickets ──
        if (!Schema::hasTable('support_tickets')) {
            Schema::create('support_tickets', function (Blueprint $table) {
                $table->string('ticket_id')->primary();
                $table->string('user_id')->nullable();
                $table->string('order_id')->nullable();
                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->string('issue_type')->nullable();
                $table->string('priority')->default('normal');
                $table->string('subject')->nullable();
                $table->text('description')->nullable();
                $table->string('status')->default('open');
                $table->timestamps();
            });
        }

        // ── Support Messages ──
        if (!Schema::hasTable('support_messages')) {
            Schema::create('support_messages', function (Blueprint $table) {
                $table->string('message_id')->primary();
                $table->string('ticket_id');
                $table->string('sender_id');
                $table->string('sender_role')->default('customer');
                $table->text('content');
                $table->timestamp('sent_at')->nullable();
            });
        }

        // ── Returns ──
        if (!Schema::hasTable('returns')) {
            Schema::create('returns', function (Blueprint $table) {
                $table->string('return_id')->primary();
                $table->string('order_item_id');
                $table->string('customer_id');
                $table->string('type')->default('return');
                $table->text('reason')->nullable();
                $table->string('status')->default('Chờ xử lý');
                $table->timestamp('requested_at')->nullable();
            });
        }

        // ── Warranties ──
        if (!Schema::hasTable('warranties')) {
            Schema::create('warranties', function (Blueprint $table) {
                $table->string('warranty_id')->primary();
                $table->string('order_item_id');
                $table->string('product_id');
                $table->string('product_serial')->nullable();
                $table->date('start_date')->nullable();
                $table->date('end_date')->nullable();
                $table->string('status')->default('active');
                $table->string('service_center')->nullable();
                $table->text('notes')->nullable();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('warranties');
        Schema::dropIfExists('returns');
        Schema::dropIfExists('support_messages');
        Schema::dropIfExists('support_tickets');
        Schema::dropIfExists('product_reviews');
        Schema::dropIfExists('order_discounts');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('cart_items');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('suppliers');
        Schema::dropIfExists('categories');
    }
};
