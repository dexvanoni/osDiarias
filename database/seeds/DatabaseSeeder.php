<?php

use Illuminate\Database\Seeder;
use App\Os;
use App\Adm;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
         {
             $this->call(oSTableSeeder::class);
         }
}
class OsTableSeeder extends Seeder{
    public function run(){

      Adm::create([
        'pescodigo' => '4115570',
        'pnome' => '3S DENIS VIEIRA VANONI'
      ]);

    /*  Os::create([
        'pescodigo'=>'4115570',
        'pnome'=>'3S DENIS VIEIRA VANONI',
        'saram'=>'4115570',
        'cpf'=>'08800033312',
        'banco'=>'334',
        'servico'=>'Teste de envio para o banco b ',
        'om'=>'GAP-CG',
        'dono' => '4115570'
      ]);*/
    }

}
