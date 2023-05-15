<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration {

	public function up()
	{

            Schema::create('carts', function(Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
                $table->float('total');
                $table->timestamps();
            });
        }

	public function down()
	{
		Schema::drop('carts');
	}
}
