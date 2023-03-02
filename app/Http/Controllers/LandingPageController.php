<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DetailAbout;
use App\Models\LandingPage;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.index');
    }

    public function landingPage()
    {
        $pages = LandingPage::where('id', 1)->first();
        $details = DetailAbout::all();
        $services = Service::all();
        $clients = Client::all();
        return view('pages.dashboard.landing-page', compact('pages', 'details', 'services', 'clients'));
    }

    public function home(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255'
        ]);

        LandingPage::where('id', 1)->update($validateData);

        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function about(Request $request)
    {
        $validateData = $request->validate([
            'about1' => 'required|min:10',
            'about2' => 'required|min:10'
        ]);
        LandingPage::where('id', 1)->update($validateData);

        return redirect()->back()->with('success', 'Data about us berhasil diupdate');
    }

    public function contact(Request $request)
    {
        $validateData = $request->validate([
            'address' => 'required|min:10|max:255',
            'email' => 'required|email|email:dns',
            'phone_num' => 'required|min:9|max:13',
            'twitter' => 'min:5|nullable',
            'facebook' => 'min:5|nullable',
            'instagram' => 'min:5|nullable',
            'linkedin' => 'min:5|nullable',
        ]);

        LandingPage::where('id', 1)->update($validateData);

        return redirect()->back()->with('success', 'Data contact berhasil diupdate');
    }

    public function detailCreate(Request $request)
    {
        $validateData = $request->validate([
            'detail' => 'required'
        ]);

        DetailAbout::create($validateData);

        return redirect()->back()->with('success', 'Data detail about us berhasil ditambahkan');
    }

    public function detailEdit($id, Request $request)
    {
        $idDescrypt = decrypt($id);
        $validateData = $request->validate([
            'detail' => 'required'
        ]);

        DetailAbout::where('id', $idDescrypt)->update($validateData);
        return redirect()->back()->with('success', 'Data detail about us berhasil diupdate');
    }

    public function detailDelete($id)
    {
        $idDescrypt = decrypt($id);
        DetailAbout::where('id', $idDescrypt)->delete();
        return redirect()->back()->with('success', 'Data detail about us berhasil dihapus');
    }

    public function serviceCreate(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
        ]);

        Service::create($validateData);

        return redirect()->back()->with('success', 'Data Service berhasil ditambahkan');
    }

    public function serviceEdit($id, Request $request)
    {
        $idDescrypt = decrypt($id);
        $validateData = $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
        ]);
        Service::where('id', $idDescrypt)->update($validateData);

        return redirect()->back()->with('success', 'Data Service berhasil diedit');
    }

    public function serviceDelete($id)
    {
        $idDescrypt = decrypt($id);
        Service::where('id', $idDescrypt)->delete();
        return redirect()->back()->with('success', 'Data service berhasil dihapus');
    }

    public function clientCreate(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'logo' => 'required|file|image|mimes:jpg,jpeg,png|max:50000'
        ]);

        $foto = $request->file('logo');
        $name = $foto->hashName();
        $validateData['logo'] = 'logo/' . $name;
        $foto->move(public_path('/logo'), $name);

        Client::create($validateData);

        return redirect()->back()->with('success', 'Data client berhasil ditambahkan');
    }

    public function clientEdit($id, Request $request)
    {
        $idDescrypt = decrypt($id);
        $client = Client::where('id', $idDescrypt)->first();
        $validateData = $request->validate([
            'name' => 'required',
            'logo' => 'file|image|mimes:jpg,jpeg,png|max:50000'
        ]);
        $validateData['logo'] = $client->logo;

        if ($request->logo != null) {
            if ($client->logo != null) {
                if (file_exists($client->logo)) {
                    unlink(public_path($client->logo));
                }
            }
            $foto = $request->file('logo');
            $name = $foto->hashName();
            $validateData['logo'] = 'logo/' . $name;
            $foto->move(public_path('/logo'), $name);
        }

        $client->update($validateData);
        return redirect()->back()->with('success', 'Data client berhasil diedit');
    }

    public function clientDelete($id)
    {
        $idDescrypt = decrypt($id);
        $client = Client::where('id', $idDescrypt)->first();

        if ($client->logo != null) {
            if (file_exists($client->logo)) {
                unlink(public_path($client->logo));
            }
        }

        $client->delete();
        return redirect()->back()->with('success', 'Data client berhasil dihapus');
    }
}