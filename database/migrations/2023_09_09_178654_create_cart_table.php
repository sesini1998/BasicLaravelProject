<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    // The "up" method is used to define the structure of the "cart" table when running the migration.
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id(); // Creates an auto-incremental primary key column named 'id'.
            $table->integer('product_id'); // Creates a column to store the product's ID.
            $table->integer('user_id'); // Creates a column to store the user's ID.
            $table->timestamps(); // Creates 'created_at' and 'updated_at' timestamp columns.
        });
    }

    // The "down" method is used to reverse the changes made by the "up" method, typically used for rolling back migrations.
    public function down()
    {
        Schema::dropIfExists('cart'); // Deletes the 'cart' table if it exists.
    }
}
