<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use  App\Models\Client;
use  App\Models\Billing;
use  App\Models\Clients_channel;
use  App\Models\Clients_message;

use Carbon\Carbon;

class ListaController extends Controller
{
    public function index(Request $request)
    {   
        $Dominio = $request['dominio'];   
        $Client = Client::all();
        $Billing = Billing::all();
        $Clients_channel = Clients_channel::all();
        $Clients_message = Clients_message::all();

        try {
            $Client = Client::where('domain', $Dominio)->get();
            $Billing = Billing::where('client_id',$Client[0]['id'])->get();
            $Clients_channel = Clients_channel::where('id_client', $Client[0]['id'])->get();
            $Clients_message = Clients_message::where('domain', $Dominio)->get();
            

            $Total_message_mes = ListaController::getMessageCount($request);
            $Data_Inicio_Trial = new Carbon($Billing[0]['begin_at']);
            $Data_Inicio = $Data_Inicio_Trial->format('d-m-Y');
            $Data_Final = $Data_Inicio_Trial->addDays(14)->format('d-m-Y');
        } catch (Exception $e) {
            Log::error($e);
        }
        return view('consulta.index',compact('Dominio','Data_Inicio','Data_Final','Clients_channel','Clients_message','Total_message_mes'));
    }



    public function getMessageCount($request)
    {
        try {
            $first_day = Carbon::now()->startOfMonth();
            $last_day = Carbon::now()->endOfMonth();

            $counts = Clients_message::selectRaw("count(*) as message_total")
                ->selectRaw("count(case when type = 'in' then 1 end) as message_in")
                ->selectRaw("count(case when type = 'out' then 1 end) as message_out")
                ->where('domain', $request->input('domain'))
                ->whereBetween('date', [$first_day, $last_day])
                ->first();
        } catch (Exception $e) {
            Log::error($e);
        }

        return $counts->message_total;
    }
}
