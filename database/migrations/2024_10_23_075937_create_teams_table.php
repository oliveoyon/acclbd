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
        Schema::create('teams', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('full_name'); // Full name of the team
            $table->string('short_name'); // Short name of the team
            $table->string('logo')->nullable(); // Logo URL or path
            $table->string('team_image')->nullable(); // Team image URL or path
            $table->text('description')->nullable(); // Team description
            $table->string('year')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps(); // Created at & Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};

