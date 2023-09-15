<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    // The "up" method is used to define the structure of the "users" table when running the migration.
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Creates an auto-incremental primary key column named 'id'.
            $table->string('name'); // Creates a column for the user's name.
            $table->string('email')->unique(); // Creates a unique email column.
            $table->string('password'); // Creates a column to store the hashed password.
            $table->timestamps(); // Creates 'created_at' and 'updated_at' timestamp columns.
        });
    }

    // The "down" method is used to reverse the changes made by the "up" method, typically used for rolling back migrations.
    public function down()
    {
        Schema::dropIfExists('users'); // Deletes the 'users' table if it exists.
    }
}
