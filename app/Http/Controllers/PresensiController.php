<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class PresensiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();

        if ($user->hasRole('direktur')) {
            return view('admin.presensi.menuPresensi');
        } else if ($user->hasRole('karyawan')) {
            $data = Presensi::where('id_workers', $user->id)->get();
            return view('user.presensi.menuPresensi')->with('data', $data);
        }
    }

    public function data(Request $request)
    {
        $user = $request->user();

        if ($user->hasRole('direktur')) {
            $data = Presensi::whereDate('created_at', now())->get();
            return view('admin.presensi.dataPresensi')->with('data', $data);
        } else if ($user->hasRole('karyawan')) {
            $data = Presensi::where('id_workers', $user->id)->with('user')->get();
            return view('user.presensi.dataPresensi')->with('data', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function createDatang(Request $request)
    {
        $user = $request->user();

        $check = Presensi::select('*')
            ->where('id_workers', '=', $user->id)
            ->whereDate('created_at', Carbon::today())
            ->get();

        if ($check->count() > 0) {
            Alert::warning('Perhatian!', 'Anda telah cek kehadiran hari ini');
            return redirect()->route('presensiuser');
        } else {
            return view('user.presensi.presensiDatang');
        }
    }

    public function istirahat(Request $request)
    {
        $user = $request->user();

        $istirahat = Presensi::select('*')
            ->where('id_workers', '=', $user->id)
            ->whereDate('created_at', Carbon::today())
            ->get();

        if ($istirahat->count() > 0) {

            $check = $istirahat[0]->break;

            if ($check != NULL) {
                Alert::warning('Perhatian!', 'Anda telah istirahat hari ini');
                return redirect()->route('presensiuser');
            } else if ($check == NULL) {
                return view('user.presensi.presensiIstirahat')->with('istirahat', $istirahat);
            }
        } else {
            Alert::warning('Perhatian!', 'Anda belum cek kehadiran hari ini');
            return redirect()->route('presensidatang');
        }
    }

    public function back(Request $request)
    {
        $user = $request->user();

        $back = Presensi::select('*')
            ->where('id_workers', '=', $user->id)
            ->whereDate('created_at', Carbon::today())
            ->get();

        if ($back->count() > 0) {

            $check = $back[0]->back;

            if ($check != NULL) {
                Alert::warning('Perhatian!', 'Anda telah kembali hari ini');
                return redirect()->route('presensiuser');
            } else if ($check == NULL) {
                return view('user.presensi.presensiKembali')->with('back', $back);
            }
        } else {
            Alert::warning('Perhatian!', 'Anda belum cek kehadiran hari ini');
            return redirect()->route('presensidatang');
        }
    }

    public function checkout(Request $request)
    {
        $user = $request->user();

        $checkout = Presensi::select('*')
            ->where('id_workers', '=', $user->id)
            ->whereDate('created_at', Carbon::today())
            ->get();
        if ($checkout->count() > 0) {

            $check = $checkout[0]->check_out;

            if ($check != NULL) {
                Alert::warning('Perhatian!', 'Anda telah pulang hari ini');
                return redirect()->route('presensiuser');
            } else if ($check == NULL) {
                return view('user.presensi.presensiPulang')->with('checkout', $checkout);
            }
        } else {
            Alert::warning('Perhatian!', 'Anda belum cek kehadiran hari ini');
            return redirect()->route('presensidatang');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->file('check_in_photo'));
        $request->validate([
            'id_workers' => 'required',
            'check_in_photo' => 'required',
        ]);

        // CEK FOTO VALID
        if ($request->check_in_photo->isValid()) {
            $check_in_photo = 'Datang-' . now() . $request->get('id_workers') . '.' . $request->check_in_photo->extension();
            $request->file('check_in_photo')->storeAs('presensi/datang', $check_in_photo, 'public');
        }

        dd($check_in_photo);

        $ontime = "03:00:00 - 07:30:00";

        if ($request->check_in > $ontime) {
            $desc = "Terlambat";
        } else if ($request->check_in <= $ontime) {
            $desc = "Tepat Waktu";
        }

        DB::beginTransaction();
        $presensi = new Presensi([
            'id_workers' => $request->get('id_workers'),
            'check_in_photo' => $check_in_photo,
            'link_check_in' => $request->get('link_check_in'),
            'location_check_in' => $request->get('location_check_in'),
            'description' => $desc,
            'check_in' => now(),
            'created_at' => now(),
        ]);

        $presensi->save();

        DB::commit();

        Alert::success('Berhasil', 'Anda telah cek kehadiran hari ini');
        return redirect()->route('presensiuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function show(Presensi $presensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Presensi $presensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presensi $presensi)
    {
        //
    }

    public function updateIstirahat(Request $request, Presensi $presensi)
    {
        $presensi->id = $request->get('id');
        $presensi->id_workers = $request->get('id_workers');
        $presensi->check_in = $request->get('check_in');
        $presensi->check_in_photo = $request->get('check_in_photo');
        $presensi->location_check_in = $request->get('location_check_in');
        $presensi->link_check_in = $request->get('link_check_in');
        $presensi->break = now();
        $presensi->updated_at = now();

        $presensi->save();

        Alert::success('Berhasil', 'Anda telah mengambil Istirahat');
        return redirect()->route('presensiuser');
    }

    public function updateBack(Request $request, Presensi $presensi)
    {
        $request->validate([
            'id_workers' => 'required',
            'back_photo' => 'required',
            'link_back' => 'required',
        ]);

        // CEK FOTO VALID
        if ($request->back_photo->isValid()) {
            $back_photo = 'Kembali-' . now() . $request->get('id_workers') . '.' . $request->back_photo->extension();
            $request->file('back_photo')->storeAs('presensi/kembali', $back_photo, 'public');
        }

        $presensi->id = $request->get('id');
        $presensi->id_workers = $request->get('id_workers');
        $presensi->check_in = $request->get('check_in');
        $presensi->check_in_photo = $request->get('check_in_photo');
        $presensi->location_check_in = $request->get('location_check_in');
        $presensi->link_check_in = $request->get('link_check_in');
        $presensi->break = $request->get('break');
        $presensi->back = now();
        $presensi->back_photo = $back_photo;
        $presensi->link_back = $request->get('link_back');
        $presensi->location_back = $request->get('location_back');
        $presensi->updated_at = now();

        $presensi->save();

        Alert::success('Berhasil', 'Anda telah kembali, Semangat!');
        return redirect()->route('presensiuser');
    }

    public function updateCheckout(Request $request, Presensi $presensi)
    {
        $presensi->id = $request->get('id');
        $presensi->id_workers = $request->get('id_workers');
        $presensi->check_in = $request->get('check_in');
        $presensi->check_in_photo = $request->get('check_in_photo');
        $presensi->location_check_in = $request->get('location_check_in');
        $presensi->link_check_in = $request->get('link_check_in');
        $presensi->break = $request->get('break');
        $presensi->back = $request->get('back');
        $presensi->check_out = now();
        $presensi->updated_at = now();

        $presensi->save();

        Alert::success('Berhasil', 'Terima kasih atas kontribusi anda hari ini, Sampai jumpa kembali');
        return redirect()->route('presensiuser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presensi  $presensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presensi $presensi)
    {
        //
    }
}
