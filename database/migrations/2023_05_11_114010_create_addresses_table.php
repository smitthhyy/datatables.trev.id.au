<?php
/**
 * 2023_05_11_114010_create_addresses_table.php
 * Project: ${PROJECT_NAME}
 * Author: ${USER}
 * 11/05/2023 11:40 am
 * Copyright Trevor van der Linden, IoT Systems Design Pty Ltd. All rights reserved.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('postcode');
            $table->string('country');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
