<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MThemeClassList;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Database;

class ThemeClassListController extends BaseController
{
    public function index()
    {

        $db = Database::connect();

        $builder = $db->table('m_theme as a');
        $builder->select('a.*, b.nama as jenis_theme');
        $builder->join('m_jenis_theme as b', 'a.jenis_theme_id = b.id');
        $builder->where('a.flag', 'Y');
        $list = $builder->get()->getResultArray();

        $data = [
            "list" => $list
        ];

        return view('theme/index', $data);
    }

    public function add(){
        return view('theme/add', []);
    }

    public function saveAdd(){
        $data = $this->request->getPost();
        $insert = [
            'nama' => $data['nama'],
            'jenis_theme_id' => $data['jenis_theme_id'],
            'flag' => 'Y',
            'created_who' => 'admin',
            'updated_who' => 'admin'
        ];

        $model = new MThemeClassList();
        try {
            $model->insert($insert);
        } catch (\Throwable $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Berhasil menyimpan');
    }

    public function edit($id){

        $model = new MThemeClassList();
        $getData = $model->find($id);

        $jenisModel = new MJenisTheme();
        $listjenis  = $jenisModel->where('flag','Y')->findAll();

        $data = [
            'data' => $getData,
            'listjenis' => $listjenis
        ];

        return view('theme/edit', $data);
    }

    public function saveEdit(){
        $data = $this->request->getPost();
        // die(json_encode($data));
        $update = [
            'nama' => $data['nama'],
            'jenis_theme_id' => $data['jenis_theme_id'],
            'updated_who' => 'admin'
        ];

        $model = new MThemeClassList();
        try {
            $model->update($data['id'], $update);
        } catch (\Throwable $e){
            return redirect()->to('/theme/edit/'.$data['id'])->with('error', $e->getMessage());
        }
        return redirect()->to('/theme/edit/'.$data['id'])->with('success', 'Berhasil update data');
    }

    public function saveDelete($id){
        $update = [
            'flag' => 'N',
            'updated_who' => 'admin'
        ];
        $model = new MThemeClassList();
        try {
            $model->update($id, $update);
        } catch (\Throwable $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Berhasil Menghapus');
    }
}
