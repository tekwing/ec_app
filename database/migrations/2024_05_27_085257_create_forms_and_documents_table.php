<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('forms_and_documents', function (Blueprint $table) {
            $table->id();
            $table->Text('unique_id');
            $table->longText('html_content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('forms_and_documents');
    }
};
