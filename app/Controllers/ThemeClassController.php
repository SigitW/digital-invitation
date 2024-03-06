<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MThemeClass;
use CodeIgniter\HTTP\ResponseInterface;

class ThemeClassController extends BaseController
{
    public function index()
    {
        $model = new MThemeClass();
        $list = $model->where('flag', 'Y')->findAll();
        $data = [
            "list" => $list
        ];
        return view('themeclass/index', $data);
    }

    public function add(){
        return view('themeclass/add', []);
    }

    public function saveAdd(){
        $data = $this->request->getPost();
        $insert = [
            'nama' => $data['nama'],
            'flag' => 'Y',
            'created_who' => 'admin',
            'updated_who' => 'admin'
        ];

        $model = new MThemeClass();
        try {
            $model->insert($insert);
        } catch (\Throwable $e){
            return view('themeclass/add', [
                'status' => 'error',
                'msg' => $e->getMessage() 
            ]);
        }
        
        return view('themeclass/add', [
            'status' => 'success',
            'msg' => 'Berhasil menyimpan'
        ]);
    }

    public function edit($id){

        $model = new MThemeClass();
        $getData = $model->find($id);
        $data = [
            'data'=>$getData
        ];
        return view('themeclass/edit', $data);
    }

    public function saveEdit(){
        $data = $this->request->getPost();
        // die(json_encode($data));
        $update = [
            'nama' => $data['nama'],
            'updated_who' => 'admin'
        ];
        $model = new MThemeClass();

        try {
            $model->update($data['id'], $update);
        } catch (\Throwable $e){
            return view('themeclass/edit', [
                'status' => 'error',
                'msg' => $e->getMessage(),
                'data' =>  $model->find($data['id'])
            ]);
        }

        return view('themeclass/edit', [
            'status' => 'success',
            'msg' => 'Berhasil update', 
            'data' => $model->find($data['id'])
        ]);
    }

    public function saveDelete($id){
        $update = [
            'flag' => 'N',
            'updated_who' => 'admin'
        ];
        $model = new MThemeClass();
        try {
            $model->update($id, $update);
        } catch (\Throwable $e){
            return $this->index();
        }
        return $this->index();
    }
}
