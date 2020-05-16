<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTableSiswa extends Migration
{
    public function up()
    {
        Schema::rename('table_siswa', 'siswa');
        Schema::dropIfExists('table_siswa');
    }
    public function down()
    {
        //
    }
}
