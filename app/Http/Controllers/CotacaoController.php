<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class CotacaoController extends Controller
{
    public function cotacao()
    {
        $symbol = 'PETR4.SAO';
        $apikey = 'M25PFPX95ZZNOBFO';
        $function = 'GLOBAL_QUOTE';

        $response = Http::get("https://www.alphavantage.co/query?function={$function}&symbol={$symbol}&apikey={$apikey}");
        $data = $response->json();

        $price = $data['Global Quote']['05. price'];

        return view('cotacao', ['price' => $price]);
    }
}
