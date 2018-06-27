<?php

namespace App\Http\Controllers;
use App\MahasiswaModel;
use App\Http\Transformers\TransformerMahasiswa;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function index(){
		$data = MahasiswaModel::all();
		return response($data);
	}

///////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function showmahasiswa($id){
		$data = MahasiswaModel::where('id',$id)->get();
		return response ($data);
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function storemahasiswa(Request $request){
		$data = new MahasiswaModel();
		$data->nim_mhs = $request->input('nim_mhs');
		$data->nm_mhs = $request->input('nm_mhs');
		$data->tgl_lahir = $request->input('tgl_lahir');
    $data->email_mhs = $request->input('email_mhs');
		$data->telp_mhs = $request->input('telp_mhs');
		$data->jenkel_mhs = $request->input('jenkel_mhs');
    $data->alamat_mhs = $request->input('alamat_mhs');

		$data->save();

		return response('Berhasil Tambah Data');
	}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function updatemahasiswa(Request $request, $id){
		$data = MahasiswaModel::where('id',$id)->first();
		$data->nm_mhs = $request->input('nm_mhs');
    $data->tgl_lahir = $request->input('tgl_lahir');
    $data->email_mhs = $request->input('email_mhs');
		$data->telp_mhs = $request->input('telp_mhs');
		$data->jenkel_mhs = $request->input('jenkel_mhs');
    $data->alamat_mhs = $request->input('alamat_mhs');

    $data->save();

		return response('Berhasil Merubah Data');
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function destroymahasiswa($id){
		$data = MahasiswaModel::where('id',$id)->first();
		$data->delete();

		return response('Berhasil Menghapus Data');
	}

}
