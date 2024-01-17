<?php

// database/migrations/xxxx_xx_xx_create_voters_table.php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotersTable extends Migration
{
    public function up()
    {
        Schema::create('voters', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob')->default(now()->subYears(18));
            $table->string('mobile');
            $table->string('email')->unique();
            $table->text('address');
            $table->string('district');
            $table->string('state');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voters');
    }

}

