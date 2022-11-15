<?php

namespace App\Controllers;

use App\Models\Katalog;
use App\Models\Checkout;
use App\Models\wishlistModel;
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
    
    public function profile()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => 'active',
            'section_navbar_title5' => null,
            'cart' => \Config\Services::cart(),
        ];
        return view('home/profile', $data);
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

    public function getCost()
	{
		if ($this->request->isAJAX()){
			$origin = $this->request->getGet('origin');
			$destination = $this->request->getGet('destination');
			$weight = $this->request->getGet('weight');
			$courier = $this->request->getGet('courier');
			$data = $this->rajaongkircost($origin, $destination, $weight, $courier);
			return $this->response->setJSON($data);
		}
	}

    private function rajaongkircost($origin, $destination, $weight, $courier)
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "origin=".$origin."&destination=".$destination."&weight=".$weight."&courier=".$courier,
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/x-www-form-urlencoded",
		    "key: ".$this->apiKey,
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		return $response;
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
        return redirect()->to(base_url('shopingCart'));
    }

    public function delete($rowid)
    {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return redirect()->to(base_url('shopingCart'));
    }

    public function update()
    {
        $cart = \Config\Services::cart();
        $i = 1;
        $keranjang = $cart->contents();
        foreach($keranjang as $key) {
            $cart->update(array(
                'rowid' => $key['rowid'] ,
                'qty' => $this->request->getPost('qty'.$i++),
            ));
        } 
        session()->setflashdata('pesan' , 'Data Keranjang Berhasil di Update');
        return redirect()->to(base_url('shopingCart'));
    }

    public function add_wishlist()
    {
        $wishlistModel = new wishlistModel();
        $id_produk = $this->request->getPost('id_produk');
        $nama_produk = $this->request->getPost('nama_produk');
        $harga_produk = $this->request->getPost('harga_produk');
        $gambar_produk = $this->request->getPost('gambar_produk');
        $data = [
            'id_produk' => $id_produk,
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk,
            'gambar_produk' => $gambar_produk,
        ];
        $wishlistModel->save($data);
        return redirect()->to(base_url('home'));
    }

    public function view_wishlist()
    {
        $wishlistModel = new wishlistModel();
        $wishlist = $wishlistModel->findAll();
        $data = [
            'wishlist' => $wishlist,
            'cart' => \Config\Services::cart()      
        ]; 
        return view('home/view_wishlist', $data);
    }

    public function delete_wishlist($id_wishlist)
    {
        $wishlistModel = new wishlistModel();
        $wishlistModel->delete($id_wishlist);
        return redirect()->to(base_url('/view_wishlist'));
    }

    public function add_checkout()
    {
        $checkoutModel = new Checkout();
        $ongkir = $this->request->getPost('ongkir');
        $nama = $this->request->getPost('nama');
        $total_keranjang = $this->request->getPost('total_keranjang');
        $alamat = $this->request->getPost('alamat');
        $keterangan = $this->request->getPost('keterangan');
        $provinsi = $this->request->getPost('provinsi');
        $kabupaten = $this->request->getPost('kabupaten');
        $ongkir = $this->request->getPost('jasa');
        $kurir = $this->request->getPost('kurir');
        $status = $this->request->getPost('status');
        $id_bank = $this->request->getPost('bank');
        $id_user = user()->id;
        
        $data = [
            'ongkir' => $ongkir,
            'nama' => $nama,
            'total_keranjang' => $total_keranjang,
            'alamat' => $alamat,
            'keterangan' => $keterangan,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'kurir' => $kurir,
            'status' => $status,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
            'id_bank' => $id_bank,
            'id_user' => $id_user,
        ];
        $checkoutModel->save($data);

        $cart = \Config\Services::cart();
        $pesananModel = new Pesanan();
        foreach($cart->contents() as $item){
            $data = [
                'id_checkout' => $checkoutModel->getInsertID(),
                'id_barang' => $item['id'],
                'nama_barang' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price'],
            ];
            $pesananModel->save($data);
        }

        $cart = \Config\Services::cart();
        $cart->destroy();
        return redirect()->to(base_url('/view_order'));
    }

    public function view_order()
    {
        $checkoutModel = new checkout();
        $checkout = $checkoutModel->where('id_user', user()->id)->findAll();
        $db = \Config\Database::connect();
        $sql = "SELECT nama_bank, no_rek
                FROM bank, checkout
                WHERE checkout.id_bank = bank.id";
        $query   = $db->query($sql);
        $results = $query->getResultArray();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'checkout' => $checkout,
            'bank' => $results,
            'cart' => \Config\Services::cart()      
        ]; 
        return view('home/view_order', $data);
    }

    public function delete_order($id_order)
    {
        $checkoutModel = new Checkout();
        $data = $checkoutModel->delete($id_order);
        return redirect()->to('/view_order');
    }

    public function detail_order($id_order)
    {
        $checkoutModel = new Checkout();
        $db = \config\Database::connect();
        $sql_tgl = "SELECT date_format(tgl_pesan, ('%d-%m-%Y')) as tanggal_pesan, date_format(batas_bayar, ('%d-%m-%Y')) as batas_bayar
                FROM checkout
                WHERE checkout.id = ".$id_order;
        $query_tgl   = $db->query($sql_tgl);
        $tgl = $query_tgl->getResultArray();

        $builder = $db->table('pesanan');
        $builder->select('*');
        $builder->where('id_checkout', $id_order);
        $query_psn = $builder->get();

        $pesananModel = new Pesanan();
        $bankModel = new Bank();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'cart' => \Config\Services::cart(),
            'checkout' => $checkoutModel->find($id_order),
            'pesanan' => $query_psn->getResult(),
            'bank' => $bankModel->findAll(),
            'tgl' => $tgl,
        ];
        return view('home/invoice', $data);
    }

    public function invoice_print($id_order)
    {
        $checkoutModel = new Checkout();
        $db = \config\Database::connect();
        $sql_tgl = "SELECT date_format(tgl_pesan, ('%d-%m-%Y')) as tanggal_pesan, date_format(batas_bayar, ('%d-%m-%Y')) as batas_bayar
                FROM checkout
                WHERE checkout.id = ".$id_order;
        $query_tgl   = $db->query($sql_tgl);
        $tgl = $query_tgl->getResultArray();

        $builder = $db->table('pesanan');
        $builder->select('*');
        $builder->where('id_checkout', $id_order);
        $query_psn = $builder->get();

        $pesananModel = new Pesanan();
        $bankModel = new Bank();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'cart' => \Config\Services::cart(),
            'checkout' => $checkoutModel->find($id_order),
            'pesanan' => $query_psn->getResult(),
            'bank' => $bankModel->findAll(),
            'tgl' => $tgl,
        ];
        return view('home/invoice_print', $data);
    }
}
