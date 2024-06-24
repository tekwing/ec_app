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
        Schema::create('forms_documents_html', function (Blueprint $table) {
            $table->id();
            $table->longText('html_content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('forms_documents_html');
    }
};
