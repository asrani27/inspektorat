<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skpd;
use App\Role;
use App\Kategori;
use App\Komponen;
use App\User;
use Alert;

class MasterDataController extends Controller
{
    public function skpd()
    {
        $data = Skpd::all();
        return view('superadmin.skpd.index',compact('data'));
    }

    public function tambahSkpd()
    {
        return view('superadmin.skpd.tambah');
    }

    public function simpanSkpd(Request $req)
    {
        $roleSkpd     = Role::where('name','skpd')->first();
        $cek_username = User::where('username', $req->username)->first();
        if($cek_username == null)
        {
            $user           = new User;
            $user->name     = $req->nama;
            $user->username = $req->username;
            $user->email       = $req->email;
            $user->password    = bcrypt($req->password);
            $user->save();
            $user->roles()->attach($roleSkpd);

            $skpd           = new Skpd;
            $skpd->nama     = $req->nama;
            $skpd->users_id = $user->id;
            $skpd->save(); 
            Alert::success('SKPD Berhasil Disimpan', 'Pesan');
        }
        else
        {
            Alert::error('Username Sudah Ada', 'Pesan');
        }
        return redirect('/masterdata/skpd');
    }

    public function updateSkpd(Request $req, $id)
    {
        if($req->password == null)
        {
            $u = Skpd::find($id);
            $u->nama = $req->nama;
            $u->jml_pegawai = $req->jml_pegawai;
            $u->predikat = $req->predikat;
            $u->save();

            $d = $u->user;
            $d->email = $req->email;
            $d->save();
        }
        else
        {
            $u = Skpd::find($id);
            $u->nama = $req->nama;
            $u->jml_pegawai = $req->jml_pegawai;
            $u->predikat = $req->predikat;
            $u->save();

            $d = $u->user;
            $d->email = $req->email;
            $d->password = bcrypt($req->password);
            $d->save();
        }
        Alert::success('Skpd Berhasil Di update', 'Pesan');
        return redirect('/masterdata/skpd');
    }

    public function editSkpd($id)
    {
        $data = Skpd::find($id);
        return view('superadmin.skpd.edit',compact('data'));
    }

    public function deleteSkpd($id)
    {
        $del = Skpd::find($id)->delete();
        Alert::success('Skpd Berhasil Di Hapus', 'Pesan');
        return back();
    }

    public function kategori()
    {
        $data = Kategori::where('jenis','zi')->get();
        return view('superadmin.kategori.index',compact('data'));
    }

    public function deletekategori($id)
    {
        $del = Kategori::find($id)->delete();
        Alert::success('Kategori Berhasil Dihapus', 'Pesan');
        return back();
    }

    public function simpankategori(Request $req)
    {
        $k = new Kategori;
        $k->nama = $req->nama;
        $k->jenis = 'zi';
        $k->save();
        Alert::success('Kategori Berhasil Disimpan', 'Pesan');
        return back();
    }

    public function updatekategori(Request $req)
    {
        $k = Kategori::find($req->id_kategori);
        $k->nama = $req->nama;
        $k->save();
        Alert::success('Kategori Berhasil Di Perbaharui', 'Pesan');
        return back();
    }

    public function wbk()
    {
        $data = Kategori::where('jenis','wbk')->get();
        return view('superadmin.kategori.wbk',compact('data'));
    }

    public function deletewbk($id)
    {
        $del = Kategori::find($id)->delete();
        Alert::success('Kategori Berhasil Dihapus', 'Pesan');
        return back();
    }

    public function simpanwbk(Request $req)
    {
        $k = new Kategori;
        $k->nama = $req->nama;
        $k->jenis = 'wbk';
        $k->save();
        Alert::success('Kategori Berhasil Disimpan', 'Pesan');
        return back();
    }

    public function updatewbk(Request $req)
    {
        $k = Kategori::find($req->id_kategori);
        $k->nama = $req->nama;
        $k->save();
        Alert::success('Kategori Berhasil Di Perbaharui', 'Pesan');
        return back();
    }

    public function wbbm()
    {
        $data = Kategori::where('jenis','wbbm')->get();
        return view('superadmin.kategori.wbbm',compact('data'));
    }

    public function deletewbbm($id)
    {
        $del = Kategori::find($id)->delete();
        Alert::success('Kategori Berhasil Dihapus', 'Pesan');
        return back();
    }

    public function simpanwbbm(Request $req)
    {
        $k = new Kategori;
        $k->nama = $req->nama;
        $k->jenis = 'wbbm';
        $k->save();
        Alert::success('Kategori Berhasil Disimpan', 'Pesan');
        return back();
    }

    public function updatewbbm(Request $req)
    {
        $k = Kategori::find($req->id_kategori);
        $k->nama = $req->nama;
        $k->save();
        Alert::success('Kategori Berhasil Di Perbaharui', 'Pesan');
        return back();
    }

    public function simpanPegawai(Request $req, $id_skpd)
    {
        $s = Skpd::find($id_skpd);
        $s->jml_pegawai = $req->jml_pegawai;
        $s->save();
        Alert::success('Jumlah Pegawai Berhasil Di Perbaharui', 'Pesan');
        return back();
    }

    public function komponen()
    {
        $data = Komponen::all();
        return view('superadmin.komponen.index',compact('data'));
    }

    public function deletekomponen($id)
    {
        $del = Komponen::find($id)->delete();
        Alert::success('Komponen Berhasil Dihapus', 'Pesan');
        return back();
    }

    public function simpankomponen(Request $req)
    {
        $k = new Komponen;
        $k->nama = $req->nama;
        $k->bobot = $req->bobot;
        $k->save();
        Alert::success('Komponen Berhasil Disimpan', 'Pesan');
        return back();
    }

    public function updatekomponen(Request $req)
    {
        $k = Komponen::find($req->id_komponen);
        $k->nama = $req->nama;
        $k->bobot = $req->bobot;
        $k->save();
        Alert::success('Komponen Berhasil Di Perbaharui', 'Pesan');
        return back();
    }
}
