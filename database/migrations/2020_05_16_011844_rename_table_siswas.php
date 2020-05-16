<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTableSiswas extends Migration
{
    public function up()
    {
        Schema::rename('siswa', 'siswas');
        Schema::dropIfExists('siswa');
    }
    public function down()
    {
        //
    }
}
