<?php

namespace Database\Seeders;

use App\Models\Hora;
use Illuminate\Database\Seeder;

class HoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hora=new Hora();
        $hora->rango="09:00-10:00";
        $hora->orden=1;
        $hora->activo=1;
        $hora->save();
        $hora2=new Hora();
        $hora2->rango="10:00-11:00";
        $hora2->orden=2;
        $hora2->activo=1;
        $hora2->save();
        $hora3=new Hora();
        $hora3->rango="11:00-12:00";
        $hora3->orden=3;
        $hora3->activo=1;
        $hora3->save();
        $hora4=new Hora();
        $hora4->rango="12:00-13:00";
        $hora4->orden=4;
        $hora4->activo=1;
        $hora4->save();
        $hora5=new Hora();
        $hora5->rango="14:00-15:00";
        $hora5->orden=5;
        $hora5->activo=1;
        $hora5->save();
        $hora6=new Hora();
        $hora6->rango="15:00-16:00";
        $hora6->orden=6;
        $hora6->activo=1;
        $hora6->save();
        $hora7=new Hora();
        $hora7->rango="16:00-17:00";
        $hora7->orden=7;
        $hora7->activo=1;
        $hora7->save();
        $hora8=new Hora();
        $hora8->rango="17:00-18:00";
        $hora8->orden=8;
        $hora8->activo=1;
        $hora8->save();
        $hora9=new Hora();
        $hora9->rango="18:00-19:00";
        $hora9->orden=9;
        $hora9->activo=1;
        $hora9->save();
        $hora10=new Hora();
        $hora10->rango="19:00-20:00";
        $hora10->orden=10;
        $hora10->activo=1;
        $hora10->save();
        $hora11=new Hora();
        $hora11->rango="20:00-21:00";
        $hora11->orden=11;
        $hora11->activo=1;
        $hora11->save();
    }
}
