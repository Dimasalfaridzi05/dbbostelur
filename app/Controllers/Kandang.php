<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Kandang extends ResourceController
{
    protected $modelName = 'App\Models\KandangModel';
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
        $kandang = new \App\Entities\Kandang();
        $kandang->fill($data);

        if (!$this->validate($this->model->validationRules,$this->model->validationMessages)) {
            return $this->fail($this->validator->getErrors());
        }

        if ($this->model->save($kandang)) {
            return $this->respondCreated($data, "kandang berhasil di buat");
        }
    }

    public function update($id = null)
    {
        $data=$this->request->getRawInput();
        $data['id_kandang']=$id;

        if (!$this->model->find($id)) {
            return $this->fail("Data tidak ditemukan");
        }

        $kandang=new \App\Entities\Kandang();
        $kandang->fill($data);

        if (!$this->validate($this->model->validationRules,$this->model->validationMessages)) {
            return $this->fail($this-> validator->getErrors());
        }

        if ($this->model->save($kandang)) {
            return $this->respondUpdated($data, "kandang berhasil di rubah");
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
