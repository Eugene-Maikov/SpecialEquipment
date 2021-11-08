<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            //привязка к таблице User
            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name');
            $table->text('description')->nullable();
            //привязка к таблице Category
            $table->foreignIdFor(\App\Models\Category::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('before_img');
            $table->string('after_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
