<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LaravelCrud extends Controller
{
    //
    function index(){
        return view('admin.register');
    }

public function daftar(){
    $data['title'] = 'Register';
    return view('admin.register', $data);
}
public function login(){
    $data['title'] = 'Login';
    return view('admin.login', $data);
}
public function daftarAdmin(){
    $data['title'] = 'RegisterAdmin';
    return view('admin.registerAdmin', $data);
}

    public function daftar_action(Request $request){

        $request->validate([
            'nama'=>'required',
            'nrp'=>'required',
            'fakultas'=>'required',
            'pilihan1'=>'required',
            'alasan1'=>'required',
            'pilihan2'=>'required',
            'alasan2'=>'required',
            'lineID'=>'required',
            'noHP'=>'required',
            'ktm'=>'required',
            'foto'=>'required',
            'cv'=>'required',
            'essay'=>'required',
            'khs'=>'required',
            'porto'=>'required',
            ]);

        $ktm = $request->get('nama').' KTM.png';
        $foto = $request->get('nama').' FOTO.png';
        $cv = $request->get('nama').' CV.pdf';
        $essay = $request->get('nama').' ESSAY.pdf';
        $khs = $request->get('nama').' KHS.pdf';

        $query = DB::table('staff')->insert([
            'nama'=>$request->input('nama'),
            'nrp'=>$request->input('nrp'),
            'fakultas'=>$request->input('fakultas'),
            'pilihan1'=>$request->input('pilihan1'),
            'alasan1'=>$request->input('alasan1'),
            'pilihan2'=>$request->input('pilihan2'),
            'alasan2'=>$request->input('alasan2'),
            'idline'=>$request->input('lineID'),
            'nohp'=>$request->input('noHP'),
            'ktm'=>$ktm,
            'cv'=>$cv,
            'fotodiri'=>$foto,
            'portofolio'=>$request->input('porto'),
            'jadwal1'=>$request->input('jadwal1'),
            'jadwal2'=>$request->input('jadwal2'),
            'jadwal3'=>$request->input('jadwal3'),
            'jadwal4'=>$request->input('jadwal4'),
            'jadwal5'=>$request->input('jadwal5'),
            'jadwal6'=>$request->input('jadwal6'),
            'jadwal7'=>$request->input('jadwal7'),
            'jadwal8'=>$request->input('jadwal8'),
            'jadwal9'=>$request->input('jadwal9'),
            'essay'=>$essay,
            'khs'=>$khs,
            'submited_at'=>date('Y-m-d H:i:s'),
        ]);

        $request->file('ktm')->storeAs('public/img/ktm/', $ktm);
        $request->file('foto')->storeAs('public/img/foto/', $foto);
        $request->file('cv')->storeAs('public/img/cv/', $cv);
        $request->file('essay')->storeAs('public/img/essay/', $essay);
        $request->file('khs')->storeAs('public/img/khs/', $khs);



        if($query){
            return back()->with('SUKSES', 'ANDA TELAH MENDAFTAR SEBAGAI STAFF BEM-US');

        }
        else{
            return back()->with('GAGAL', 'PENDAFTARAN GAGAL!');
        }
    }

    function login_action(Request $request)
    {
        $request->validate([
            'nrp' => 'required',
            'password' => 'required',
        ]);

        $query = DB::table('users')->select([
            'nrp'=>$request->input('nrp'),
            'password'=>$request->input('password'),
        ]);


        //if(Auth::attempt(['nrp' => $request->nrp, 'password' => $request->password])){
        //    $request->session()->regenerate();
        //    return redirect()->route('admin');
        //}

        if($query){
            return redirect()->route('admin');
        }
        else{
            return back()->withErrors('password', "NRP atau Passwordnya salah ya!");
        }

    }

    public function daftarAdmin_action(Request $request){

        $request->validate([
            'nama'=>'required',
            'nrp'=>'required',
            'fakultas'=>'required',
            'kementrian' =>'required',
            'password'=>'required',
            'password_confirmation'=>'required|same:password'
            ]);

        $query = DB::table('users')->insert([
            'nama'=>$request->input('nama'),
            'nrp'=>$request->input('nrp'),
            'fakultas'=>$request->input('fakultas'),
            'kementrian'=>$request->input('kementrian'),
            'password'=>$request->input('password'),
        ]);

        if($query){
            return redirect()->route('login')->with('BERHASIL', 'Cie Admin, Monggo Login' );

        }
        else{
            return back()->with('GAGAL', 'PENDAFTARAN GAGAL!');
        }

    }

    function show()
    {
        $data = Staff::all();
        return view('admin.admin', ['staffs'=>$data]);
    }
}
