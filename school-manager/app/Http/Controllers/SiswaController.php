<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $req)
    {

        $data['siswa'] = \DB::table('t_siswa')
            // ->where('nama_lengkap', 'LIKE', '%o%')
            ->orderBy($req->query('order_by', 'jenkel'), $req->query('sort', 'asc') == 'asc' ? 'asc' : 'desc')
            ->get();

        $data['nav'] = 'siswa';
        return view('siswa.siswa', $data);
    }

    public function create_view()
    {
        $data['nav'] = 'siswa';
        return view('siswa.form', $data);
    }

    public function update_view(Request $req, $id)
    {
        $data['nav'] = 'siswa';
        $data['siswa'] = \DB::table('t_siswa')->find($id);
        return view('siswa.form', $data);
    }

    public function create(Request $req)
    {
        $rule = [
            'nis' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'jenkel' => 'required',
            'goldar' => 'required'
        ];
        $this->validate($req, $rule);

        $input = $req->all();
        unset($input['_token']);

        $status = \DB::table('t_siswa')->insert($input);

        return $status ?
            redirect('/siswa')->with('success', 'Data siswa berhasil ditambahkan') :
            redirect('/siswa/create')->with('error', 'Data siswa gagal ditambahkan');
    }

    public function update(Request $req, $id)
    {
        $rule = [
            'nis' => 'required|numeric',
            'nama_lengkap' => 'required|string',
            'jenkel' => 'required',
            'goldar' => 'required'
        ];
        $this->validate($req, $rule);

        $input = $req->all();
        unset($input['_token']);
        unset($input['_method']);

        $status = \DB::table('t_siswa')->where('id', $id)->update($input);

        return $status ?
            redirect('/siswa')->with('success', 'Data siswa berhasil diubah') :
            redirect('/siswa/' . $id . '/edit')->with('error', 'Data siswa gagal diubah');
    }

    public function delete(Request $req, $id)
    {
        $status = \DB::table('t_siswa')->where('id', $id)->delete();

        return $status ?
            redirect('/siswa')->with('success', 'Data siswa berhasil dihapus') :
            redirect('/siswa')->with('error', 'Data siswa gagal dihapus');

    }

}