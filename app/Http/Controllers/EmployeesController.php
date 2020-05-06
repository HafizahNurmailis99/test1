<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Kgb;
use Illuminate\Http\Request;
use Carbon\Carbon;
//use Illuminate\Support\Facades\Date;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pegawai = DB::table('employees')->join('kgbs','employees.nip','=','kgbs.nip')->get();
        $pegawai = Employee::all();
         //dump($pegawai);
        return view('pegawai.index', compact('pegawai'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
        
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
            'nama'=>'required',
            'nip'=>'required|size:18',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'jabatan'=>'required',
            'golongan'=>'required',
            'kantor'=>'required',
            'gaji_pokok_akhir'=>'required',
            'tgl_gajian_akhir'=>'required',
            'tgl_masuk_kerja'=>'required'
        ]);

        Employee::create($request->all());

        return redirect('/pegawai')->with('status', 'Penambahan Pegawai berhasil!');
        //return($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('pegawai.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('pegawai.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nama'=>'required',
            'nip'=>'required|size:18',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'jabatan'=>'required',
            'golongan'=>'required',
            'kantor'=>'required',
            'gaji_pokok_akhir'=>'required',
            'tgl_gajian_akhir'=>'required',
            'tgl_masuk_kerja'=>'required'
        ]);

        Employee::where('id', $employee->id)
                ->update([
                    'nama'=>$request->nama,
                    'nip'=>$request->nip,
                    'tempat_lahir'=>$request->tempat_lahir,
                    'tgl_lahir'=>$request->tgl_lahir,
                    'jabatan'=>$request->jabatan,
                    'golongan'=>$request->golongan,
                    'kantor'=>$request->kantor,
                    'gaji_pokok_akhir'=>$request->gaji_pokok_akhir,
                    'tgl_gajian_akhir'=>$request->tgl_gajian_akhir,
                    'tgl_masuk_kerja'=>$request->tgl_masuk_kerja
                ]);
        return redirect('/pegawai')->with('status', 'Data pegawai berhasil diubah');
        //return($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        return redirect('/pegawai')->with('status', 'data berhasil dihapus');
    }

    public function process(){
        // dump($pegawai);
        //$pegawai = Employee::all();
        $tgl_gajian_akhir = Carbon::now()->subYears(2);
        $pegawai = Employee::whereMonth('tgl_gajian_akhir', $tgl_gajian_akhir)->get();
        return view('kgb.index', compact('pegawai'));
        //return($tgl_gaji_akhir);
        //return($pegawai);
        //dump($pegawai);
    }

    public function future(){
        // dump($pegawai);
        //$pegawai = Employee::all();
        $tgl_gajian_akhir = Carbon::now()->subYears(2);
        $pegawai = Employee::whereYear('tgl_gajian_akhir', $tgl_gajian_akhir)->get();
        return view('kgb.future', compact('pegawai'));
        //return($tgl_gaji_akhir);
        //return($pegawai);
        //dump($pegawai);

    }
    
    public function prokgb(Employee $employee, Kgb $kgb){

        return view('kgb.processkgb', compact('employee', 'kgb'));
        //dump($employee);

        // $tgl_sekarang = Carbon::now();
        // $pegawai = Employee::all();
        // $masa_kerja_lama =[];
        
        //  for($i=0;$i<sizeof($pegawai);$i++){
        //     $jarak = $tgl_sekarang->diffInYears($pegawai[$i]['tgl_masuk_kerja']);
        //     array_push($masa_kerja_lama, $jarak);
        //  }
        
        //$diffinday = date_diff($tgl_sekarang, $tgl_masuk_kerja);
        //$pegawai = Employee::whereYear('tgl_gaji_akhir', $tgl_gaji_akhir)->get();
        //return($masa_kerja_lama);
        //return view('kgb.processkgb', compact('employee', 'kgb'))->with('masa_kerja_lama', $masa_kerja_lama);
        //return($employee);
    }
    public function processrun(Request $request, Employee $employee, Kgb $kgb)
    {
        // try{
        $request->validate([
            'nama'=>'required',
            'nip'=>'required|size:18',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'jabatan'=>'required',
            'golongan'=>'required',
            'kantor'=>'required',
            'gaji_pokok_lama'=>'required',
            'tgl_gajian_akhir'=>'required',
            'lama_tahun'=>'required',
            'lama_bulan'=>'required',
            'gaji_pokok_baru'=>'required',
            'lama_tahun_skg'=>'required',
            'lama_bulan_skg'=>'required',
            'tgl_gajian_baru'=>'required',
            'tgl_gaji_datang'=>'required'
        ]);

        Employee::where('id', $employee->id)
                ->processrun([
                    'nama'=>$request->nama,
                    'nip'=>$request->nip,
                    'tempat_lahir'=>$request->tempat_lahir,
                    'tgl_lahir'=>$request->tgl_lahir,
                    'jabatan'=>$request->jabatan,
                    'golongan'=>$request->golongan,
                    'kantor'=>$request->kantor,
                    'gaji_pokok_lama'=>$request->gaji_pokok_lama,
                    'tgl_gajian_akhir'=>$request->tgl_gajian_akhir,
                    'tgl_masuk_kerja'=>$request->tgl_masuk_kerja
                ]);
        Kgb::where('id', $kgb->id)
                ->processrun([
                    'gaji_pokok_baru'=>$request->gaji_pokok_baru,
                    'tgl_gajian_baru'=>$request->tgl_gajian_baru,
                    'lama_tahun'=>$request->lama_tahun,
                    'lama_bulan'=>$request->lama_bulan
                ]);
        
        Employee::processrun($request->all());
        Kgb::processrun($request->all());
        
        //return response('true');
        return redirect('/kgb/riwayatcetak')->with('status', 'Data pegawai berhasil diproses');
        //dump($kgb);
        // } catch (\Trhowable $th) {
        //     return response('false');
        // }
       
    }
    // public function cetak(Employee $employee, Kgb $kgb){
    //     return view('kgb.riwayatcetak',  compact('employee', 'kgb'));
    // }
}
