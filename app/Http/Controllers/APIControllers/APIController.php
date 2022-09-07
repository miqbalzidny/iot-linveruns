<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Models\Voltage;
use App\Models\Current;
use App\Models\Power;
use App\Models\Frequency;
use App\Models\Pf;
use App\Models\Energy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class APIController extends Controller
{
    // API untuk memanggil data tegangan dari database
    public function getVoltage(){
        $data = Voltage::latest()->select('voltage_value', 'created_at')->get();
        return $data;
    }
    
    // API untuk memanggill data arus dari database
    public function getCurrent(){
        $data = Current::latest()->select('current_value', 'created_at')->get();
        return $data;
    }

    // API untuk memanggil data daya dari database
    public function getPower(){
        $data = Power::latest()->select('power_value', 'created_at')->get();
        return $data;
    }

    // API untuk memanggil data frekuensi dari database
    public function getFrequency(){
        $data = Frequency::latest()->select('frequency_value', 'created_at')->get();
        return $data;
    }

    // API untuk memanggil data faktor daya dari database
    public function getPf(){
        $data = Pf::latest()->select('powerfactor_value', 'created_at')->get();
        return $data;
    }

    // API untuk memanggil data energi (KWh) dari database
    public function getEnergy(){
        $data = Energy::latest()->select('energy_value', 'created_at')->get();
        return $data;
    }

    // API untuk memanggil data sensor terakhir
    public function getData(){
        $voltage   = Voltage::latest()->pluck('voltage_value');
        $current   = Current::latest()->pluck('current_value');
        $power     = Power::latest()->pluck('power_value');
        $frequency = Frequency::latest()->pluck('frequency_value');
        $pf        = Pf::latest()->pluck('powerfactor_value');
        $energy    = Energy::latest()->pluck('energy_value');

        return [$voltage[0], $current[0], $power[0], $frequency[0], $pf[0], $energy[0]];
    }

    // API untuk menerima data sensor yang dikirim oleh ESP8266
    public function postData(Request $request){
        $voltage = new Voltage;
        $current = new Current;
        $power = new Power;
        $frequency = new Frequency;
        $pf = new Pf;
        $energy = new Energy;

        $voltage->voltage_value = $request->Voltage;
        $current->current_value = $request->Current;
        $power->power_value = $request->Power;
        $frequency->frequency_value = $request->Frequency;
        $pf->powerfactor_value = $request->Pf;
        $energy->energy_value = $request->Energy;

        $voltage->save();
        $current->save();
        $power->save();
        $frequency->save();
        $pf->save();
        $energy->save();

        return 201;
    }
}
