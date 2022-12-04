<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name')->unique(); 
            $table->string('description'); 
            $table->string('speciality'); 
            $table->integer('magic');
            $table->integer('strength');
            $table->integer('agility');
            $table->integer('intelligence');
            $table->integer('lifepoint');
            $table->foreignIdFor(User::class, 'user_id')
                ->constrained()
                ->restrictOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
};
