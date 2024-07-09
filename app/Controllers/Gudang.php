<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Gudang extends ResourceController
{
    protected $modelName = 'App\Models\GudangModel';
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
        $gudang = new \App\Entities\Gudang();
        $gudang->fill($data);

        if (!$this->validate($this->model->validationRules,$this->model->validationMessages)) {
            return $this->fail($this->validator->getErrors());
        }

        if ($this->model->save($gudang)) {
            return $this->respondCreated($data, "gudang berhasil di buat");
        }
    }

    public function update($id = null)
    {
        $data=$this->request->getRawInput();
        $data['id_gudang']=$id;

        if (!$this->model->find($id)) {
            return $this->fail("Data tidak ditemukan");
        }

        $gudang=new \App\Entities\Gudang();
        $gudang->fill($data);

        if (!$this->validate($this->model->validationRules,$this->model->validationMessages)) {
            return $this->fail($this-> validator->getErrors());
        }

        if ($this->model->save($gudang)) {
            return $this->respondUpdated($data, "gudang berhasil di rubah");
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
