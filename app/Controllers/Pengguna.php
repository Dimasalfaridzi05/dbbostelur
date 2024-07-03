<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Pengguna extends ResourceController
{
    protected $modelName = 'App\Models\PenggunaModel';
    protected $format = 'json';
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        if(!$this->model->find($id)) {
            return $this->fail('Data tidak ditemukan');
        }
        return $this->respond($this->model->find($id));
    }

    public function create()
    {
        $data = $this->request->getPost();
        $pengguna = new \App\Entities\Pengguna();
        $pengguna->fill($data);

        if (!$this->validate($this->model->validationRules,$this->model->validationMessages)) {
            return $this->fail($this->validator->getErrors());
        }

        if ($this->model->save($pengguna)) {
            return $this->respondCreated($data, "pengguna berhasil di buat");
        }
    }

    public function update($id = null)
    {
        $data=$this->request->getRawInput();
        $data['id_user']=$id;

        if (!$this->model->find($id)) {
            return $this->fail("Data tidak ditemukan");
        }

        $pengguna=new \App\Entities\Pengguna();
        $pengguna->fill($data);

        if (!$this->validate($this->model->validationRules,$this->model->validationMessages)) {
            return $this->fail($this-> validator->getErrors());
        }

        if ($this->model->save($pengguna)) {
            return $this->respondUpdated($data, "pengguna berhasil di rubah");
        }
    }

    public function delete($id = null)
    {
        if (!$this->model->find($id)) {
            return $this->fail("Data tidak ditemukan");
        }
        if ($this->model->delete($id)) {
            return $this->respondDeleted("data dengan id $id berhasil dihapus");
        }
    }
}
