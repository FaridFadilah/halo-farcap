<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("sekolah_id")->constrained("sekolahs");
            $table->string("nama");
            $table->string("email")->unique();
            $table->text("password");
            $table->string("role")->nullable();
            $table->boolean("aktif")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('user');
    }
};