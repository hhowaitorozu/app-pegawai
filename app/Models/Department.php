<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Department extends Model
{
    public function up(): void
    {
        Schema::create('departments', function(Blueprint $table){
            $table->id();
            $table->string('nama_departemen', 100);
            $table->timestamps();
        });
    }
}