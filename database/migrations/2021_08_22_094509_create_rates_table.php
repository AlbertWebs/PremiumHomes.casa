<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->text('USDAED')->nullable();
            $table->text('USDAFN')->nullable();
            $table->text('USDALL')->nullable();
            $table->text('USDAMD')->nullable();
            $table->text('USDANG')->nullable();
            $table->text('USDAOA')->nullable();
            $table->text('USDARS')->nullable();
            $table->text('USDAUD')->nullable();
            $table->text('USDAWG')->nullable();
            $table->text('USDAZN')->nullable();
            $table->text('USDBAM')->nullable();
            $table->text('USDBBD')->nullable();
            $table->text('USDBDT')->nullable();
            $table->text('USDBGN')->nullable();
            $table->text('USDBHD')->nullable();
            $table->text('USDBIF')->nullable();
            $table->text('USDBMD')->nullable();
            $table->text('USDBND')->nullable();
            $table->text('USDBOB')->nullable();
            $table->text('USDBRL')->nullable();
            $table->text('USDBSD')->nullable();
            $table->text('USDBTC')->nullable(); 
            $table->text('USDBTN')->nullable();
            $table->text('USDBWP')->nullable();
            $table->text('USDBYN')->nullable();
            $table->text('USDBYR')->nullable();
            $table->text('USDBZD')->nullable();
            $table->text('USDCAD')->nullable();
            $table->text('USDCDF')->nullable();
            $table->text('USDCHF')->nullable();
            $table->text('USDCLF')->nullable();
            $table->text('USDCLP')->nullable();
            $table->text('USDCNY')->nullable();
            $table->text('USDCOP')->nullable();
            $table->text('USDCRC')->nullable();
            $table->text('USDCUC')->nullable();
            $table->text('USDCUP')->nullable();
            $table->text('USDCVE')->nullable();
            $table->text('USDCZK')->nullable();
            $table->text('USDDJF')->nullable();
            $table->text('USDDKK')->nullable();
            $table->text('USDDOP')->nullable();
            $table->text('USDDZD')->nullable();
            $table->text('USDEGP')->nullable();
            $table->text('USDERN')->nullable();
            $table->text('USDETB')->nullable();
            $table->text('USDEUR')->nullable();
            $table->text('USDFJD')->nullable();
            $table->text('USDFKP')->nullable();
            $table->text('USDGBP')->nullable();
            $table->text('USDGEL')->nullable();
            $table->text('USDGGP')->nullable();
            $table->text('USDGHS')->nullable();
            $table->text('USDGIP')->nullable();
            $table->text('USDGMD')->nullable();
            $table->text('USDGNF')->nullable();
            $table->text('USDGTQ')->nullable();
            $table->text('USDGYD')->nullable();
            $table->text('USDHKD')->nullable();
            $table->text('USDHNL')->nullable();
            $table->text('USDHRK')->nullable();
            $table->text('USDHTG')->nullable();
            $table->text('USDHUF')->nullable();
            $table->text('USDIDR')->nullable();
            $table->text('USDILS')->nullable();
            $table->text('USDIMP')->nullable();
            $table->text('USDINR')->nullable();
            $table->text('USDIQD')->nullable();
            $table->text('USDIRR')->nullable();
            $table->text('USDISK')->nullable();
            $table->text('USDJEP')->nullable();
            $table->text('USDJMD')->nullable();
            $table->text('USDJOD')->nullable();
            $table->text('USDJPY')->nullable();
            $table->text('USDKES')->nullable();
            $table->text('USDKGS')->nullable();
            $table->text('USDKHR')->nullable();
            $table->text('USDKMF')->nullable();
            $table->text('USDKPW')->nullable();
            $table->text('USDKRW')->nullable();
            $table->text('USDKWD')->nullable();
            $table->text('USDKYD')->nullable();
            $table->text('USDKZT')->nullable();
            $table->text('USDLAK')->nullable();
            $table->text('USDLBP')->nullable();
            $table->text('USDLKR')->nullable();
            $table->text('USDLRD')->nullable();
            $table->text('USDLSL')->nullable();
            $table->text('USDLTL')->nullable();
            $table->text('USDLVL')->nullable();
            $table->text('USDLYD')->nullable();
            $table->text('USDMAD')->nullable();
            $table->text('USDMDL')->nullable();
            $table->text('USDMGA')->nullable();
            $table->text('USDMKD')->nullable();
            $table->text('USDMMK')->nullable();
            $table->text('USDMNT')->nullable();
            $table->text('USDMOP')->nullable();
            $table->text('USDMRO')->nullable();
            $table->text('USDMUR')->nullable();
            $table->text('USDMVR')->nullable();
            $table->text('USDMWK')->nullable();
            $table->text('USDMXN')->nullable();
            $table->text('USDMYR')->nullable();
            $table->text('USDMZN')->nullable();
            $table->text('USDNAD')->nullable();
            $table->text('USDNGN')->nullable();
            $table->text('USDNIO')->nullable();
            $table->text('USDNOK')->nullable();
            $table->text('USDNPR')->nullable();
            $table->text('USDNZD')->nullable();
            $table->text('USDOMR')->nullable();
            $table->text('USDPAB')->nullable();
            $table->text('USDPEN')->nullable();
            $table->text('USDPGK')->nullable();
            $table->text('USDPHP')->nullable();
            $table->text('USDPKR')->nullable();
            $table->text('USDPLN')->nullable();
            $table->text('USDPYG')->nullable();
            $table->text('USDQAR')->nullable();
            $table->text('USDRON')->nullable();
            $table->text('USDRSD')->nullable();
            $table->text('USDRUB')->nullable();
            $table->text('USDRWF')->nullable();
            $table->text('USDSAR')->nullable();
            $table->text('USDSBD')->nullable();
            $table->text('USDSCR')->nullable();
            $table->text('USDSDG')->nullable();
            $table->text('USDSEK')->nullable();
            $table->text('USDSGD')->nullable();
            $table->text('USDSHP')->nullable();
            $table->text('USDSLL')->nullable();
            $table->text('USDSOS')->nullable();
            $table->text('USDSRD')->nullable();
            $table->text('USDSTD')->nullable();
            $table->text('USDSVC')->nullable();
            $table->text('USDSYP')->nullable();
            $table->text('USDSZL')->nullable();
            $table->text('USDTHB')->nullable();
            $table->text('USDTJS')->nullable();
            $table->text('USDTMT')->nullable();
            $table->text('USDTND')->nullable();
            $table->text('USDTOP')->nullable();
            $table->text('USDTRY')->nullable();
            $table->text('USDTTD')->nullable();
            $table->text('USDTWD')->nullable();
            $table->text('USDTZS')->nullable();
            $table->text('USDUAH')->nullable();
            $table->text('USDUGX')->nullable();
            $table->text('USDUSD')->nullable();
            $table->text('USDUYU')->nullable();
            $table->text('USDUZS')->nullable();
            $table->text('USDVEF')->nullable();
            $table->text('USDVND')->nullable();
            $table->text('USDVUV')->nullable();
            $table->text('USDWST')->nullable();
            $table->text('USDXAF')->nullable();
            $table->text('USDXAG')->nullable();
            $table->text('USDXAU')->nullable();
            $table->text('USDXCD')->nullable();
            $table->text('USDXDR')->nullable();
            $table->text('USDXOF')->nullable();
            $table->text('USDXPF')->nullable();
            $table->text('USDYER')->nullable();
            $table->text('USDZAR')->nullable();
            $table->text('USDZMK')->nullable();
            $table->text('USDZMW')->nullable();
            $table->text('USDZWL')->nullable();
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
        Schema::dropIfExists('rates');
    }
}
