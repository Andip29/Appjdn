<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\ScheduledMessage;

class ReminderController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:message_show', ['only' => 'index']);
        $this->middleware('permission:message_send', ['only' => ['reminder-form', 'send-message']]);
    }
    public function showForm()
    {
        return view('reminder-form');
    }
    public function sendMessage(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $request->input('phone_number'),
                'message' => $request->input('message'),
                'countryCode' => '62', //optional
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: DzrcRrwRKg-DPpHWTg@t', // Ganti TOKEN dengan token aktual Anda
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        // Manipulasi respons atau lakukan proses lainnya

        return redirect()->back()->with('success', 'Pesan WhatsApp berhasil dikirim');
    }
}
