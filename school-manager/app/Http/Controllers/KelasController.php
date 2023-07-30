<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(Request $req)
    {
        $search = $req->query('search', '');
        $order_by = $req->query('order_by', 'jurusan');
        $jurusan = $req->query('jurusan', '');
        $sort = $req->query('sort', 'asc');

        $query = \DB::table('t_kelas');

        if ($search != '')
            $query = $query
                ->where('nama_kelas', 'LIKE', $search . '%')
                ->where('nama_wali_kelas', 'LIKE', $search . '%');

        if ($jurusan != '')
            $query = $query->where('jurusan', $jurusan);

        foreach (explode(',', $order_by) as $oby)
            $query = $query->orderBy($oby, $sort == 'asc' ? 'asc' : 'desc');

        $data['kelas'] = $query->get();
        $data['nav'] = 'kelas';

        return view('kelas.kelas', $data);
    }

    public function create_view()
    {
        $data['nav'] = 'kelas';
        return view('kelas.form', $data);
    }

    public function update_view(Request $req, $id)
    {
        $data['nav'] = 'kelas';
        $data['kelas'] = \DB::table('t_kelas')->find($id);
        return view('kelas.form', $data);
    }

    public function create(Request $req)
    {
        $rule = [
            'nama_kelas' => 'required',
            'jurusan' => 'required',
            'lokasi_ruangan' => 'required',
            'nama_wali_kelas' => 'required'
        ];
        $this->validate($req, $rule);

        $input = $req->all();
        unset($input['_token']);

        $status = \DB::table('t_kelas')->insert($input);
        // $status = false;

        return $status ?
            redirect('/kelas')->with('success', 'Data kelas berhasil ditambahkan') :
            redirect('/kelas/create')->with('error', 'Data kelas gagal ditambahkan');
    }

    public function update(Request $req, $id)
    {
        $rule = [
            'nama_kelas' => 'required',
            'jurusan' => 'required',
            'lokasi_ruangan' => 'required',
            'nama_wali_kelas' => 'required'
        ];
        $this->validate($req, $rule);

        $input = $req->all();
        unset($input['_token']);
        unset($input['_method']);

        $status = \DB::table('t_kelas')->where('id', $id)->update($input);

        return $status ?
            redirect('/kelas')->with('success', 'Data kelas berhasil diubah') :
            redirect('/kelas/' . $id . '/edit')->with('error', 'Data kelas gagal diubah');
    }

    public function delete(Request $req, $id)
    {
        $status = \DB::table('t_kelas')->where('id', $id)->delete();

        return $status ?
            redirect('/kelas')->with('success', 'Data kelas berhasil dihapus') :
            redirect('/kelas')->with('error', 'Data kelas gagal dihapus');

    }


}