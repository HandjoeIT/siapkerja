<?php

namespace App\Http\Controllers;

use App\Models\UserJobDetails;
use App\Models\WorkerPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class WorkerPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();

        if ($user->hasRole('karyawan')) {
            $data = WorkerPermission::where('id_workers', $user->id)->get();
            return view('user.permission.menuPermission')->with('data', $data);
        } else {
            return view('admin.permission.menuPermission');
        }
    }

    public function allPermissions(Request $request)
    {
        $user = $request->user();

        if ($user->hasRole('direktur')) {
            $data = WorkerPermission::with('user', 'user.userJobDetails')->get();
            return view('admin.permission.dataPermission')->with('data', $data);
        }
    }

    public function status(Request $request, $status = null)
    {
        $user = $request->user();

        if ($user->hasRole('direktur')) {
            if ($status != null) {
                $data = WorkerPermission::where('status', $status)->with('user', 'user.userJobDetails')->get();
                return view('admin.permission.dataPermission')->with('data', $data);
            } else {
                echo "error";
            }
        } else {
            return redirect()->back();
        }
    }

    public function thisMonth(Request $request)
    {
        $user = $request->user();

        if ($user->hasRole('direktur')) {
            $data = WorkerPermission::whereMonth('permission_date', Carbon::now()->month)->with('user', 'user.userJobDetails')->get();
            return view('admin.permission.dataPermission')->with('data', $data);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_workers' => 'required',
            'permission_date' => 'required',
            'documentation' => 'required',
            'permission_type' => 'required'
        ]);

        if ($request->permission_type == 'tidak masuk sakit') {
            // CEK FOTO VALID
            if ($request->documentation->isValid()) {
                $documentation = 'Doc.tms-' . $request->get('id_workers') . '-' . $request->get('permission_date') . '.' . $request->documentation->extension();
                $request->file('documentation')->storeAs('permission/tidakmasuksakit', $documentation, 'public');
            }

            DB::beginTransaction();
            $permission = new WorkerPermission([
                'id_workers' => $request->get('id_workers'),
                'documentation' => $documentation,
                'permission_type' => 'tidak masuk sakit',
                'permission_date' => $request->get('permission_date'),
                'description' => $request->get('description'),
                'created_at' => now(),
                'status' => 'on process'
            ]);
        } else if ($request->permission_type == 'tidak masuk keperluan') {
            // CEK FOTO VALID
            if ($request->documentation->isValid()) {
                $documentation = 'Doc.tmk-' . $request->get('id_workers') . '-' . $request->get('permission_date') . '.' . $request->documentation->extension();
                $request->file('documentation')->storeAs('permission/tidakmasukkeperluan', $documentation, 'public');
            }

            DB::beginTransaction();
            $permission = new WorkerPermission([
                'id_workers' => $request->get('id_workers'),
                'documentation' => $documentation,
                'permission_type' => 'tidak masuk keperluan',
                'permission_date' => $request->get('permission_date'),
                'description' => $request->get('description'),
                'created_at' => now(),
                'status' => 'on process'
            ]);
        } else if ($request->permission_type == 'setengah hari sakit') {
            // CEK FOTO VALID
            if ($request->documentation->isValid()) {
                $documentation = 'Doc.shs-' . $request->get('id_workers') . '-' . $request->get('permission_date') . '.' . $request->documentation->extension();
                $request->file('documentation')->storeAs('permission/setengahharisakit', $documentation, 'public');
            }

            DB::beginTransaction();
            $permission = new WorkerPermission([
                'id_workers' => $request->get('id_workers'),
                'documentation' => $documentation,
                'permission_type' => 'setengah hari sakit',
                'permission_date' => $request->get('permission_date'),
                'from' => $request->get('from'),
                'up_to' => $request->get('up_to'),
                'description' => $request->get('description'),
                'created_at' => now(),
                'status' => 'on process'
            ]);
        } else if ($request->permission_type == 'setengah hari keperluan') {
            // CEK FOTO VALID
            if ($request->documentation->isValid()) {
                $documentation = 'Doc.shk-' . $request->get('id_workers') . '-' . $request->get('permission_date') . '.' . $request->documentation->extension();
                $request->file('documentation')->storeAs('permission/setengahharikeperluan', $documentation, 'public');
            }

            DB::beginTransaction();
            $permission = new WorkerPermission([
                'id_workers' => $request->get('id_workers'),
                'documentation' => $documentation,
                'permission_type' => 'setengah hari keperluan',
                'permission_date' => $request->get('permission_date'),
                'description' => $request->get('description'),
                'from' => $request->get('from'),
                'up_to' => $request->get('up_to'),
                'created_at' => now(),
                'status' => 'on process'
            ]);
        }


        $permission->save();

        DB::commit();

        Alert::success('Berhasil', 'Surat Anda berhasil dikirimkan');
        return redirect()->route('permission.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
