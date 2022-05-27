<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customer extends BaseController
{
    protected $customer;

    function __construct()
    {
        $this->customer = new CustomerModel();
    }

    public function index()
    {
        $data['customer'] = $this->customer->findAll();
        return view('customer/index', $data);
    }
    public function create()
    {
        return view('customer/create');
    }
    public function store()
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'phone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'website' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'country' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'city' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'zipcode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->customer->insert([

            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'website' => $this->request->getVar('website'),
            'country' => $this->request->getVar('country'),
            'city' => $this->request->getVar('city'),
            'zipcode' => $this->request->getVar('zipcode')

        ]);
        session()->setFlashdata('message', 'Tambah Data Customer Berhasil');
        return redirect()->to('/customer');
    }
    function edit($id)
    {
        $dataCustomer = $this->customer->find($id);
        if (empty($dataCustomer)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Customer Tidak ditemukan !');
        }
        $data['customer'] = $dataCustomer;
        return view('customer/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'phone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'website' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'country' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'city' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'zipcode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->customer->update($id, [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'website' => $this->request->getVar('website'),
            'country' => $this->request->getVar('country'),
            'city' => $this->request->getVar('city'),
            'zipcode' => $this->request->getVar('zipcode')
        ]);
        session()->setFlashdata('message', 'Update Data Customer Berhasil');
        return redirect()->to('/customer');
    }
    function delete($id)
    {
        $dataCustomer = $this->customer->find($id);
        if (empty($dataCustomer)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Customer Tidak ditemukan !');
        }
        $this->customer->delete($id);
        session()->setFlashdata('message', 'Delete Data Customer Berhasil');
        return redirect()->to('/customer');
    }
}
