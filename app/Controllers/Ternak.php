<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Ternak extends ResourceController
{
    protected $modelName = 'App\Models\TernakModel';
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
        $data=$this->request->getPost();
        $ternak=new \App\Entities\Ternak();
        $ternak->fill($data);

        if (!$this->validate($this->model->validationRules,$this->model->validationMessages)) {
            return $this->fail($this-> validator->getErrors());
        }

        if ($this->model->save($ternak)) {
            return $this->respondCreated($data, "ternak berhasil di buat");
        }
    }

    public function update($id = null)
    {
        $data=$this->request->getRawInput();
        $data['id_ternak']=$id;

        if (!$this->model->find($id)) {
            return $this->fail("Data tidak ditemukan");
        }

        $ternak=new \App\Entities\Ternak();
        $ternak->fill($data);

        if (!$this->validate($this->model->validationRules,$this->model->validationMessages)) {
            return $this->fail($this-> validator->getErrors());
        }

        if ($this->model->save($ternak)) {
            return $this->respondUpdated($data, "ternak berhasil di rubah");
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
