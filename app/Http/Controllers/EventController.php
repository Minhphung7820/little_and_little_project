<?php

namespace App\Http\Controllers;

use App\Mail\SendTicket;
use App\Models\Event;
use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();
        return view('page.event.all', compact('events'));
    }
    public function detail($id = null, $slug = null)
    {

        if (!$id) {
            return abort(404);
        }
        $data = Event::findOrFail($id);
        return view('page.event.detail-event', compact('data'));
    }

    public function order(Request $request)
    {
        session()->get('order');
        if (session()->has('order')) {
            $idCurrent =  session()->get('order')['id'];
            $rs = Order::where('id', "=", $idCurrent)->where('status_pay', '=', 1)->get();
            if (count($rs) > 0) {
                $update =  Order::find($idCurrent)->update([
                    "type" => trim($request->type),
                    "qty" => trim($request->qty),
                    "dateUse" => Carbon::parse($request->date)->format('d-m') . "-" . Carbon::parse($request->date)->year,
                    "name" => trim($request->name),
                    "DateTimeout" => now()->addDays(1)->toDateString(),
                    "phone" => trim($request->phone),
                    "email" => trim($request->email),
                    "updated_at" => now()
                ]);
                if ($update) {
                    $datas = Order::find($idCurrent);
                    $order = [
                        "id" => $datas->id,
                        "type" => $datas->type,
                        "qty" => $datas->qty,
                        "date" => Carbon::parse($datas->dateUse)->toDateString(),
                        "dateShow" => Carbon::parse($datas->dateUse)->format('d/m') . "/" . Carbon::parse($datas->dateUse)->year,
                        "name" => $datas->name,
                        "phone" => $datas->phone,
                        "email" => $datas->email,
                    ];
                    session()->put('order', $order);
                    return response()->json(['status' => 200]);
                }
            }
        } else {
            $id = Order::create([
                "type" => trim($request->type),
                "qty" => trim($request->qty),
                "dateUse" => Carbon::parse($request->date)->format('d-m') . "-" . Carbon::parse($request->date)->year,
                "name" => trim($request->name),
                "DateTimeout" => now()->addDays(1)->toDateString(),
                "phone" => trim($request->phone),
                "email" => trim($request->email),
                "created_at" => now()
            ])->id;
            if ($id) {
                $data = Order::find($id);
                $order = [
                    "id" => $data->id,
                    "type" => $data->type,
                    "qty" => $data->qty,
                    "date" => Carbon::parse($data->dateUse)->toDateString(),
                    "dateShow" => Carbon::parse($data->dateUse)->format('d/m') . "/" . Carbon::parse($data->dateUse)->year,
                    "name" => $data->name,
                    "phone" => $data->phone,
                    "email" => $data->email,
                ];
                session()->put('order', $order);
                return response()->json(['status' => 200]);
            }
        }
    }
    public function PaymentPage()
    {

        return view('page.order.pay');
    }
    public function checkout(Request $request)
    {
        session()->get('check_out_success');
        $id = session()->get('order')['id'];
        Order::find($id)->update([
            'numberCard' => bcrypt($request->numberCard),
            'nameCard' => bcrypt($request->nameHolderCard),
            'dateEndCard' => bcrypt($request->dateLimit),
            'codeCard' => bcrypt($request->codeCard),
            'total' => session()->get('order')['qty'] * 120000,
            'status_pay' => 2,
            'updated_at' => now(),
        ]);
        for ($i = 1; $i <= session()->get('order')['qty']; $i++) {
            Ticket::create([
                'idOrder' => $id,
                'codeTicket' => "ALT" . Carbon::parse(session()->get('order')['date'])->year . Carbon::parse(session()->get('order')['date'])->month . $id . ucwords(substr(md5(rand()), 0, 2)),
                'type' => session()->get('order')['type'],
                'name' => session()->get('order')['name'],
                'email' => session()->get('order')['email'],
                'phone' => session()->get('order')['phone'],
                'dateUse' => session()->get('order')['dateShow'],
                'single_price' => 120000,
                'created_at' => now(),
            ]);
        }
        $orderSuccess = [
            "id" => $id,
        ];
        session()->put('check_out_success', $orderSuccess);
        session()->forget('order');
        return response()->json(['status' => 200]);
    }
    public function checkoutSuccess()
    {
        $id = session()->get('check_out_success')['id'];
        $all = Ticket::where('idOrder', '=', $id)->get();
        return view('page.order.checkout-success', compact('all'));
    }
    public function sendTicketMail(Request $request)
    {
        $folderPath = public_path('/image/ticket/');
        $image_parts = explode(";base64,", $request->base64images);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nameFile = uniqid() . "." . $image_type;
        $file = $folderPath . $nameFile;
        file_put_contents($file, $image_base64);

        $id = session()->get('check_out_success')['id'];
        $find = Order::find($id);
        $data = [
            "name" => $find->name,
            "email" => $find->email,
            "phone" => $find->phone,
            "date" => $find->date,
            "type" => $find->type,
            "total"=>$find->total,
            "qty" => count($find->ticket),
            "numPage" => $request->numpage,
            "totalPage"=>ceil($request->total/4),
            "image" => $nameFile,
        ];
        $send = Mail::to($find->email)->send(new SendTicket($data));
        if ($send) {
            return response()->json(['status' => 200]);
        }

    }
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
