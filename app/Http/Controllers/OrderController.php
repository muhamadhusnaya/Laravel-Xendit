<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Xendit\Configuration;
use Xendit\Invoice\CreateInvoiceRequest;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\InvoiceItem;

class OrderController extends Controller
{
    public function __construct()
    {
        Configuration::setXenditKey(env('XENDIT_SECRET_KEY'));
    }

    public function index()
    {
        return view('order');
    }

    public function createInvoice(Request $request)
    {
        try {

            // dd($request);

            $no_transaction = 'Inv -' . rand();
            $order = new Order;
            $order->no_transaction = $no_transaction;
            $order->external_id = $no_transaction;
            $order->item_name = $request->input('items_nama');
            $order->qty = $request->input('qty');
            $order->price = $request->input('price');
            $order->grand_total = $request->input('grand_total');

            $items = new InvoiceItem([
                'name' => $request->input('items_nama'),
                'price' => $request->input('price'),
                'quantity' => $request->input('qty'),
            ]);

            $createInvoice =  new CreateInvoiceRequest([
                'external_id' => $no_transaction,
                'amount' => $request->input('grand_total'),
                'invoice_duration' => 172800, //cara menghitung invoice duration yaitu  1 hari x 24 jam x 60 menit x 60x detik
                'items' => array($items)
            ]);

            // dd($createInvoice);

            $apiInstance = new InvoiceApi();
            $generateInvoice = $apiInstance->createInvoice($createInvoice);
            
            $order->invoice_url = $generateInvoice['invoice_url'];
            $order->save();
            return dd ($order);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}