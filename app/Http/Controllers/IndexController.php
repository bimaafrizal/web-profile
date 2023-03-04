<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DetailAbout;
use App\Models\LandingPage;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class IndexController extends Controller
{
    public function index()
    {
        $page = LandingPage::where('id', 1)->first();
        $details = DetailAbout::all();
        $services = Service::all();
        $clients = Client::all();
        return view('pages.landing-page.index', compact('page', 'details', 'services', 'clients'));
    }

    public function contactEmail(Request $request)
    {
        $checkValid = Validator::make($request->all(), [
            'name' => ['required', 'min:5', 'max:255'],
            'email' => ['required', 'email', 'email:dns'],
            'subject' => ['required', 'min:5', 'max:255'],
            'message' => ['required']
        ]);

        if ($checkValid->fails()) {
            Alert::error('Error', $checkValid->errors()->getMessageBag()->all()[0]);
            return back()->withInput();
        }

        $this->sendEmail($request->email, $request->name, $request->subject, $request->message);

        Alert::success('Berhasil Mengirim Email', 'Terima kasih telah menghubungi kami, kami akan segera memproses permintaan anda');
        return redirect()->back();
    }

    public function sendEmail($sender, $name, $subject, $body)
    {
        $pages = LandingPage::where('id', 1)->first();
        if ($this->isOnline()) {
            $email = [
                'recepient' => $pages->email,
                'fromEmail' => $sender,
                'fromName' => $name,
                'subject' => $subject,
                'body' => $body
            ];

            Mail::send('pages.email', $email, function ($message) use ($email) {
                $message->from($email['fromEmail'], $email['fromName']);
                $message->to($email['recepient']);
                $message->subject($email['subject']);
            });
        }
    }

    public function isOnline($site = "https://www.youtube.com/")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}
