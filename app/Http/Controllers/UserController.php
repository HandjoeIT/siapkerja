<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserJobDetails;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $data = User::get();
        if ($user->hasRole('direktur')) {
            return view('admin.karyawan.dataKaryawan')->with('data', $data);
        } else if ($user->hasRole('karyawan')) {
            return redirect()->back();
        }
    }

    public function joemen(Request $request)
    {
        $user = $request->user();
        $data = User::whereHas('userJobDetails', function ($query) {
            $query->where('division', 'joemen');
        })->with('userJobDetails')->get();

        if ($user->hasRole('direktur')) {
            return view('admin.karyawan.dataKaryawan')->with('data', $data);
        } else {
            return redirect()->back();
        }
    }

    public function hipzo(Request $request)
    {
        $user = $request->user();
        $data = User::whereHas('userJobDetails', function ($query) {
            $query->where('division', 'hipzo');
        })->with('userJobDetails')->get();

        if ($data !== NULL) {
            if ($user->hasRole('direktur')) {
                return view('admin.karyawan.dataKaryawan')->with('data', $data);
            } else {
                return redirect()->back();
            }
        } else {
            Alert::success('MAAF', 'Tidak ada data!');
            return redirect()->back();
        }
    }

    public function alope(Request $request)
    {
        $user = $request->user();
        $data = User::whereHas('userJobDetails', function ($query) {
            $query->where('division', 'alope');
        })->with('userJobDetails')->get();

        if ($data !== NULL) {
            if ($user->hasRole('direktur')) {
                return view('admin.karyawan.dataKaryawan')->with('data', $data);
            } else {
                return redirect()->back();
            }
        } else {
            Alert::success('MAAF', 'Tidak ada data!');
            return redirect()->back();
        }
    }

    public function import(Request $request)
    {
        $user = $request->user();
        $data = User::whereHas('userJobDetails', function ($query) {
            $query->where('division', 'import');
        })->with('userJobDetails')->get();

        if ($data !== NULL) {
            if ($user->hasRole('direktur')) {
                return view('admin.karyawan.dataKaryawan')->with('data', $data);
            } else {
                return redirect()->back();
            }
        } else {
            Alert::success('MAAF', 'Tidak ada data!');
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = $request->user();

        if ($user->hasRole('direktur')) {
            return view('admin.karyawan.createKaryawan');
        } else if ($user->hasRole('karyawan')) {
            return redirect()->back();
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'photo' => 'required',
        ]);

        // CEK FOTO VALID
        if ($request->photo->isValid()) {
            $photo = 'Avatar-' . $request->get('name') . '.' . $request->photo->extension();
            $request->file('photo')->storeAs('karyawan/avatar', $photo, 'public');
        }

        DB::beginTransaction();

        $karyawan =
            $user = new User([
                'name' => $request->get('name'),
                'photo' => $photo,
                'email' => $request->get('email'),
                'password' => Hash::make("password"),
                'phone_number' => $request->get('phone_number'),
                'gender' => $request->get('gender'),
                'address' => $request->get('address'),
                'ttl' => $request->get('ttl'),
                'created_at' => now(),
            ]);

        $user->save();
        $karyawan->assignRole('karyawan');

        foreach ($request->get('position') as $k_position => $v_position) {
            if ($v_position !== NULL) {

                foreach ($request->get('koordinator') as $k_koordinator => $v_koordinator) {
                    if ($v_koordinator !== NULL) {

                        foreach ($request->get('division') as $k_division => $v_division) {
                            if ($v_division === "joemen") {
                                $addr = "G.JOEMEN";
                                $logo = "joemen.png";
                            } else if ($v_division === "hipzo") {
                                $addr = "G.HIPZO";
                                $logo = "hipzo.png";
                            } else if ($v_division === "alope") {
                                $addr = "G.ALOPE";
                                $logo = "alope.png";
                            } else if ($v_division === "import") {
                                $addr = "G.IMPORT";
                                $logo = "import.png";
                            }

                            $userJobDetails = new UserJobDetails([
                                'id_user' => $user->id,
                                'division' => $v_division,
                                'position' => $v_position,
                                'koordinator' => 1,
                                'division_address' => $addr,
                                'division_logo' => $logo,
                            ]);
                            $userJobDetails->save();
                        }
                    }
                }
            }
        }

        DB::commit();

        Alert::success('Berhasil', 'Pegawai Baru telah ditambahkan');
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $pegawai)
    {
        return view('admin.karyawan.editKaryawan')->with('pegawai', $pegawai);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
