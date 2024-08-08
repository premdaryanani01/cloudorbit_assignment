<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Invoice;

class TestController extends Controller
{
    public function getInvoices(){
        $invoices = json_encode(Invoice::all());
        return response()->json(['message'=>'Hey This api works','data'=>$invoices]);
        // $invoices;
    }
    public function createNewInvoice(Request $request){
        Log::info("Endpoint was hit");
        // Log::info(json_encode($request->all()));
        // exit;
        $validated_content = $request->validate([
            "invoice_number" => "required|string|max:250",
            "client_name" => "required|string|max:250",
            "amount" => "required|numeric|min:0.01"
        ],[
            // todo: validation messages go here
        ]);
        $invoice = new Invoice();
        $invoice->invoice_number = $request->invoice_number;
        $invoice->client_name = $request->client_name;
        $invoice->amount = $request->amount;
        $invoice->save();
        Log::info(json_encode($invoice));
        return response()->json(['message'=>'everything went well, your data is inserted',"data"=>$validated_content]);
    }
}
