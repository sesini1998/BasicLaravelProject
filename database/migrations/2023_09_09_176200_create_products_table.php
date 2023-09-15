<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    // The "up" method is used to define the structure of the "products" table when running the migration.
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Creates an auto-incremental primary key column named 'id'.
            $table->string("name"); // Creates a column for the product's name.
            $table->string("price"); // Creates a column for the product's price.
            $table->string("category"); // Creates a column for the product's category.
            $table->string("description"); // Creates a column for the product's description.
            $table->string("gallery"); // Creates a column for the product's image gallery.
            $table->timestamps(); // Creates 'created_at' and 'updated_at' timestamp columns.
        });
    }

    // The "down" method is used to reverse the changes made by the "up" method, typically used for rolling back migrations.
    public function down()
    {
        Schema::dropIfExists('products'); // Deletes the 'products' table if it exists.
    }
}
