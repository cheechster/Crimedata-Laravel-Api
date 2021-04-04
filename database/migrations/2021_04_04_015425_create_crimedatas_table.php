<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrimedatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crimedatas', function (Blueprint $table) {
            $table->id();
            $table->string('dr_no')->nullable();
            $table->string('date_rptd')->nullable();
            $table->string('date_occ')->nullable();
            $table->string('time_occ')->nullable();
            $table->string('area')->nullable();
            $table->string('area_name')->nullable();
            $table->string('rpt_dist_no')->nullable();
            $table->string('part_1_2')->nullable();
            $table->string('crm_cd')->nullable();
            $table->string('crm_cd_desc')->nullable();
            $table->string('mocodes')->nullable();
            $table->string('vict_age')->nullable();
            $table->string('vict_sex')->nullable();
            $table->string('vict_descent')->nullable();
            $table->string('premis_cd')->nullable();
            $table->string('premis_desc')->nullable();
            $table->string('weapon_used_cd')->nullable();
            $table->string('weapon_desc')->nullable();
            $table->string('status')->nullable();
            $table->string('status_desc')->nullable();
            $table->string('crm_cd_1')->nullable();
            $table->string('crm_cd_2')->nullable();
            $table->string('crm_cd_3')->nullable();
            $table->string('crm_cd_4')->nullable();
            $table->string('location')->nullable();
            $table->string('cross_street')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
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
        Schema::dropIfExists('crimedatas');
    }
}
