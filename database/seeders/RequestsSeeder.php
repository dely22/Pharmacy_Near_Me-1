<?php

namespace Database\Seeders;

use App\Models\Request as OrderRequest;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 22; $i <=27; $i++) {

          

                $order_request = new OrderRequest();
                $order_request->client_id = $i;
                $order_request->pharmacy_id = $i-10;
                if ($order_request->save()) {
                    DB::table('request__details')->insert([
                        'request_id' => $order_request->id,
                        'drug_title' => Str::random(15),
                        'quantity' => $i * $i,
                        'accept_alternative' => true,
                        'repeat_every' => $i * $i,
                        'repeat_until' => Carbon::now()->toDateTime(),
                    ]);
                }
            
        }
    }
}
