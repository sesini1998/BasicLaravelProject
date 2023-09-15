<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    // The "up" method is used to define the structure of the "orders" table when running the migration.
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Creates an auto-incremental primary key column named 'id'.
            $table->integer('product_id'); // Creates a column to store the product's ID.
            $table->integer('user_id'); // Creates a column to store the user's ID.
            $table->string('status'); // Creates a column to store the order's status.
            $table->string('payment_method'); // Creates a column to store the payment method used.
            $table->string('payment_status'); // Creates a column to store the payment status (e.g., paid or pending).
            $table->string('address'); // Creates a column to store the shipping address.
            $table->timestamps(); // Creates 'created_at' and 'updated_at' timestamp columns.
        });
    }

    // The "down" method is used to reverse the changes made by the "up" method, typically used for rolling back migrations.
    public function down()
    {
        Schema::dropIfExists('orders'); // Deletes the 'orders' table if it exists.
    }
}
