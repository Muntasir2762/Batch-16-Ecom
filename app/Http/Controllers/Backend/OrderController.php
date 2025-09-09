<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showOrders (Request $request, $status)
    {
        if(isset($request->search) && $status == "all"){
            $orders = Order::with('orderDetails')
            ->where('phone', 'LIKE', '%'. $request->search.'%')
            ->orwhere('invoice_number', 'LIKE', '%'. $request->search.'%')
            ->orWhere('name', 'LIKE', '%'.$request->search.'%')
            ->paginate(50);
        }
        else if(isset($request->search) && $status != "all"){
            $orders = Order::with('orderDetails')
            ->where('status', $status)
            ->where('phone', 'LIKE', '%'. $request->search.'%')
            ->orwhere('invoice_number', 'LIKE', '%'. $request->search.'%')
            ->orWhere('name', 'LIKE', '%'.$request->search.'%')
            ->paginate(50);
        }
        else{
            if($status == "all"){
                $orders = Order::with('orderDetails')->paginate(50);
            }
            else{
               $orders = Order::with('orderDetails')->where('status', $status)->paginate(50);
            }
        }
        
        return view('backend.order.show-orders', compact('orders', 'status'));
    }

    public function updateOrderStatus (Request $request , $id)
    {
        $order = Order::find($id);
        $order->status = $request->status;

        $order->save();
        return redirect()->back();
    }

    public function deleteOrder ($id)
    {
        $order = Order::find($id);
        $orderDetails = OrderDetails::where('order_id', $id)->get();

        foreach($orderDetails as $details){
            $details->delete();
        }

        $order->delete();
        toastr()->success('Order deleted successfully');
        return redirect()->back();
    }

    public function editOrder ($id)
    {
        $order = Order::with('orderDetails')->where('id', $id)->first();
        return view('backend.order.edit-order', compact('order'));
    }

    public function updateOrder (Request $request, $id)
    {
        $order = Order::find($id);
        
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->charge = $request->charge;
        $order->address = $request->address;
        $order->courier_name = $request->courier_name;
        $order->price = $request->price;

        $order->save();
        toastr()->success("Updated successfully!");
        return redirect()->back();
    }

    //Courier...
    public function courierEntry ($order_id)
    {

        $order = Order::find($order_id);

       if($order->courier_name == "steadfast"){
         $apiEndpoint = "https://portal.packzy.com/api/v1/create_order";

        $header = [
            'Api-Key' => "jla9q5zsl2a3x70ab8q26swdk5bkb8gr",
            'Secret-Key' => "8aqo4qh0f7wuqfzeijfqsjyy",
            'Content-Type' => "application/json"
        ];

        //Body Parameters..
        $invoiceNumber = $order->invoice_number;
        $customerName = $order->name;
        $customerPhone = $order->phone;
        $customerAddress = $order->address;
        $amount = $order->price;

        $payLoad = [
            'invoice' => $invoiceNumber,
            'recipient_name' => $customerName,
            'recipient_phone' => $customerPhone,
            'recipient_address' => $customerAddress,
            'cod_amount' => $amount,
        ];

        $response = Http::withHeaders($header)->post($apiEndpoint, $payLoad);
        $jsonData = $response->json();
        //dd($jsonData);

        if(isset($jsonData['consignment'])){
            $order->tracking_code = $jsonData['consignment']['tracking_code'];
            $order->consignment_id = $jsonData['consignment']['consignment_id'];
            $order->save();
        }
       }

       elseif($order->courier_name == "pathao"){

       }

        toastr()->success("Courier entry is successfull");
        return redirect()->back();
    }

    //Print Invoice...
    public function printInvoice ($order_id)
    {
        $order = Order::with('orderDetails')->where('id', $order_id)->first();
        return view('backend.order.invoice', compact('order'));
    }
}
