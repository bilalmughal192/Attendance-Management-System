<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emps', function (Blueprint $table) {
            $table->id();
            $table->string('name',15);
            $table->string('father_name',15);
            $table->date('dob');
            $table->string('cnic');
            $table->string('ph');
            $table->date('doj');
            $table->string('email',30);
            $table->string('gender',6);
            $table->string('desg_name',30);
            $table->string('dept_name',30);
            $table->boolean('status');
            $table->timestamps();
        });
        DB::statement("DBCC CHECKIDENT ('emps', RESEED, 1000)");
         // Laravel 10+

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
