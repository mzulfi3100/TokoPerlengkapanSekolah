<?php

namespace App\Controllers;

use App\Models\Katalog;
use App\Models\categoriesModel;

class Home extends BaseController
{
    private $url = "https://api.rajaongkir.com/starter/";
    private $apiKey = "4b577fa60db320c4445ae5adae4fbb73";

    public function __construct()
    {
        helper(['form', 'url']);
    }
    
    public function index()
    {
        $katalogModel = new Katalog();
        $katalog = $katalogModel -> findAll();
        $data = [
            'section_navbar_title1' => 'active',
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => null,
            'katalog' => $katalog,
            'cart' => \Config\Services::cart(),
        ];

        return view('home/landing_page', $data);
    }
    public function shopGrid()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => null,
            'cart' => \Config\Services::cart(),
        ];
        return view('home/shopGrid', $data);
    }
    public function contact()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => 'active',
            'section_navbar_title4' => null,
            'section_navbar_title5' => null,
            'cart' => \Config\Services::cart(),
        ];
        return view('home/contact', $data);
    }
    public function blog()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => 'active',
            'section_navbar_title5' => null,
            'cart' => \Config\Services::cart(),
        ];
        return view('home/blog', $data);
    }
    public function blogDetails()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => 'active',
            'section_navbar_title5' => null,
            'cart' => \Config\Services::cart(),
        ];
        return view('home/blogDetails', $data);
    }
    public function checkout()
    {
        $provinsi = $this->rajaongkir('province');
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => null,
            'cart' => \Config\Services::cart(),
            'provinsi' => json_decode($provinsi)->rajaongkir->results,
        ];
        return view('pelanggan/checkout', $data);
    }

    public function getCity()
    {
        if ($this->request->isAJAX()){
			$id_province = $this->request->getGet('id_province');
			$data = $this->rajaongkir('city', $id_province);
			return $this->response->setJSON($data);
		}
    }

    private function rajaongkir($method, $id_province=null)
	{
		$endPoint = $this->url.$method;

		if($id_province!=null)
		{
			$endPoint = $endPoint."?province=".$id_province;
		}

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $endPoint,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "key: ".$this->apiKey
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

        return $response;        
	}
    
    public function shopDetails()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => null,
            'cart' => \Config\Services::cart(),
        ];
        return view('home/shopDetails', $data);
    }

    public function shopingCart()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => null,
            'cart' => \Config\Services::cart(),
        ];
        return view('home/shopingCart', $data);
    }
    public function loginRegister()
    {
        return view('home/loginRegister');
    }
    public function register()
    {
        return view('home/register');
    }
    public function admin()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',
            'cart' => \Config\Services::cart(),
        ];
        return view('home/admin', $data);
    }
    public function categoriesSection()
    {
        $categories = new categoriesModel();
        $all_data = $categories->findAll();

        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',
            'all_data' => $all_data,
            'cart' => \Config\Services::cart(),
        ];
        return view('home/categoriesSection', $data);
    }
    public function edit_categories($id = false)

    {
        $categories = new categoriesModel();
        $data_categories = $categories->find($id);
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',
            'data_categories' => $data_categories,
            
        ];
        return view('home/edit_categories', $data);
    }
    public function add_categories()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => null,
            'section_navbar_title5' => 'active',

        ];
        return view('home/add_categories', $data);
    }
    public function categories_update_proses()
    {
        $categories = new categoriesModel();
        $categories->update($this->request->getPost('id_categories'), $this->request->getPost());

        return redirect()->to(base_url('/categoriesSection'));
    }
    public function categories_proses()
    {

        $categories = new categoriesModel();
        $categories->insert($this->request->getPost());

        return redirect()->to(base_url('/categoriesSection'));
    }

    public function delete_categories($id = false)
    {
        $categories = new categoriesModel();
        $categories->delete($id);
        return redirect()->to(base_url('/categoriesSection'));
    }

    public function cek()
    {
        $cart = \Config\Services::cart();
        // $cart->destroy();
        $response = $cart->contents();
        echo '<pre>';
        print_r($response);
        echo '</pre>';
    }
    public function add(){
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getPost('id'),
            'qty'     => 1,
            'price'   => $this->request->getPost('price'),
            'name'    => $this->request->getPost('name'),
            'options' => array('gambar' => $this->request->getPost('gambar'))
        ));
        session()->setflashdata('pesan', $this->request->getPost('name'));
        return redirect()->to(base_url('home'));
    }
    public function clear(){
        $cart = \Config\Services::cart();
        $cart->destroy();
    }
}
