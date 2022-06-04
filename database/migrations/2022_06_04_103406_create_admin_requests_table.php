<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('requester_id');
            $table->string('approver_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('request_type');
            $table->json('payload')->nullable();
            $table->unsignedInteger('request_type_id');
            $table->enum('status', ['pending', 'declined', 'approved']);
            $table->foreign('request_type_id')->references('id')->on('request_types')->onDelete('cascade');
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
        Schema::dropIfExists('admin_requests');
    }
}
