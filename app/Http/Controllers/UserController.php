<?php
namespace App\Http\Controllers;
use illuminate\Http\controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::with('level')->get();
        return view('user',['data' =>$user]);
    }
    public function tambah()
    {
        return view('user_tambah');
    }

    //fillable
    public function tambah_simpan(Request $request){
        UserModel::create([
            'username' => 'manager-dua',
            'nama' => 'manager 2',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ]);
        return redirect('/user');
    }
    //not found exceptions
    public function index2()
    {
        $user = UserModel::findOrFail((1));
        return view('user',['data' => $user]);
    }
    //Retreiving or Creating Models
    public function index3()
    {
        $user = UserModel::firstOrCreate(
            [
            'username' => 'manager',
            'nama' => 'manager'
            ],
        );
        return view('user', ['data'=>$user]);
    }




    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah',['data' => $user]);
    }
    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username =$request->username;
        $user->nama =$request->nama;
        $user->level_id =$request->level_id;

        $user->save();
        return redirect('/user');
    }
    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
