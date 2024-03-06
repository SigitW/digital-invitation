<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MJenisTheme;
use CodeIgniter\HTTP\ResponseInterface;

class JenisThemeController extends BaseController
{
    public function index()
    {
        $jenisThemeModel = new MJenisTheme();
        $list = $jenisThemeModel->where('flag', 'Y')->findAll();
        // die(json_encode($list));
        $data = [
            "list" => $list
        ];
        return view('themetype/index', $data);
    }

    public function add(){
        return view('themetype/add', []);
    }

    public function saveAdd(){
        $data = $this->request->getPost();
        $insert = [
            'nama' => $data['nama'],
            'flag' => 'Y',
            'created_who' => 'admin',
            'updated_who' => 'admin'
        ];

        $jenisThemeModel = new MJenisTheme();
        try {
            $jenisThemeModel->insert($insert);
        } catch (\Throwable $e){
            return view('themetype/add', [
                'status' => 'error',
                'msg' => $e->getMessage() 
            ]);
        }
        
        return view('themetype/add', [
            'status' => 'success',
            'msg' => 'Berhasil menyimpan'
        ]);
    }

    public function edit($id){

        $jenisThemeModel = new MJenisTheme();
        $getData = $jenisThemeModel->find($id);
        $data = [
            'data'=>$getData
        ];
        return view('themetype/edit', $data);
    }

    public function saveEdit(){
        $data = $this->request->getPost();
        // die(json_encode($data));
        $update = [
            'nama' => $data['nama'],
            'updated_who' => 'admin'
        ];
        $jenisThemeModel = new MJenisTheme();

        try {
            $jenisThemeModel->update($data['id'], $update);
        } catch (\Throwable $e){
            return view('themetype/edit', [
                'status' => 'error',
                'msg' => $e->getMessage(),
                'data' =>  $jenisThemeModel->find($data['id'])
            ]);
        }

        return view('themetype/edit', [
            'status' => 'success',
            'msg' => 'Berhasil update', 
            'data' => $jenisThemeModel->find($data['id'])
        ]);
    }

    public function saveDelete($id){
        $update = [
            'flag' => 'N',
            'updated_who' => 'admin'
        ];
        $jenisThemeModel = new MJenisTheme();
        try {
            $jenisThemeModel->update($id, $update);
        } catch (\Throwable $e){
            return $this->index();
        }
        return $this->index();
    }
}
