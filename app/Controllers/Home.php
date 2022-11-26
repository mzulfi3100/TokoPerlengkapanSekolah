<?php

namespace App\Controllers;

use App\Models\Katalog;
use App\Models\Bank;
use App\Models\Pesanan;
use App\Models\Checkout;
use App\Models\wishlistModel;
use App\Models\categoriesModel;
use App\Models\productsfoundModel;
use App\Models\ProfileModel;

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
        if(user()->role == "pegawai"){
            return redirect()->to('/pegawai/dashboard');
        }
        
        $categories = new categoriesModel();
        $all_data = $categories->findAll();
        $katalogModel = new Katalog();
        $katalog = $katalogModel -> findAll();
        $wishlistModel = new WishlistModel();
        $wishlist = $wishlistModel->where('id_user', user()->id)->findAll();

        $db = \config\Database::connect();
        $sql = "SELECT *
                FROM katalog, categories_home
                WHERE katalog.id_kategori = categories_home.id" ;
        $query   = $db->query($sql);
        $result = $query->getResultArray();

        $data = [
            'section_navbar_title1' => 'active',
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'all_data' => $all_data,
            'katalog' => $katalog,
            'featured' => $result,
            'wishlist' => $wishlist,
            'cart' => \Config\Services::cart(),
        ];

        return view('home/landing_page', $data);
    }

    public function profile()
    {
        $user = [
            'email' => user()->email,
            'username' => user()->username,
        ];
        $categories = new categoriesModel();
        $all_data = $categories->findAll();
        $profileModel = new ProfileModel();
        $wishlistModel = new WishlistModel();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'all_data' => $all_data,
            'wishlist' => $wishlistModel->findAll(),
            'user' => $user,
            'profile' => $profileModel->find(user()->id),
            'cart' => \Config\Services::cart(),
        ];
        return view('home/profile', $data);
    }

    public function update_profile($id_user)
    {
        $profileModel = new ProfileModel();
        
        $user = [
            'email' => user()->email,
            'username' => user()->username,
        ];

        $profileModel = new ProfileModel();
        $wishlistModel = new WishlistModel();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'section_navbar_title4' => 'active',
            'section_navbar_title5' => null,
            'wishlist' => $wishlistModel->findAll(),
            'user' => $user,
            'profile' => $profileModel->find(user()->id),
            'cart' => \Config\Services::cart(),
        ];

        return view('home/edit_profile', $data);
    }

    public function update_profile_process($id_user)
    {
        $profileModel = new ProfileModel();
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
        $alamat = $this->request->getPost('alamat');
        $nama_lengkap = $this->request->getPost('nama_lengkap');
        $no_telepon = $this->request->getPost('no_telepon');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');

        $data = [
            'email' => $email,
            'username' => $username,
            'alamat' => $alamat,
            'nama_lengkap' => $nama_lengkap,
            'no_telepon' => $no_telepon,
            'jenis_kelamin' => $jenis_kelamin,
        ];

        $profileModel->update($id_user, $data);
        return redirect()->to('/profile');
    }

    public function shopGrid()
    {
        $katalogModel = new Katalog();
        $categories = new categoriesModel();
        $all_data = $categories->findAll();
        $katalog = $katalogModel->findAll();
        $wishlistModel = new WishlistModel();
        $wishlist = $wishlistModel->where('id_user', user()->id)->findAll();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'all_data' => $all_data,
            'wishlist' => $wishlist,
            'katalog' => $katalog,
            'cart' => \Config\Services::cart(),
        ];
        return view('home/shopGrid', $data);
    }
    public function checkout()
    {
        $bankModel = new Bank();
        $wishlistModel = new WishlistModel();
        $provinsi = $this->rajaongkir('province');
        $categories = new categoriesModel();
        $all_data = $categories->findAll();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => 'active',
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'all_data' => $all_data,
            'cart' => \Config\Services::cart(),
            'bank' => $bankModel->findAll(),
            'wishlist' => $wishlistModel->where('id_user', user()->id)->findAll(),
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
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'cart' => \Config\Services::cart(),
        ];
        return view('home/shopDetails', $data);
    }

    public function shopingCart()
    {
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
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
        $wishlistModel = new WishlistModel();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => 'active',
            'hero' => 'hero hero-normal',
            'wishlist' => $wishlistModel->where('id_user', user()->id)->findAll(),
            'cart' => \Config\Services::cart(),
        ];
        return view('home/admin', $data);
    }
    public function categoriesSection()
    {
        $categories = new categoriesModel();
        $all_data = $categories->findAll();
        $wishlistModel = new WishlistModel();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => 'active',
            'hero' => 'hero hero-normal',
            'wishlist' => $wishlistModel->where('id_user', user()->id)->findAll(),
            'all_data' => $all_data,
            'cart' => \Config\Services::cart(),
        ];
        return view('home/categoriesSection', $data);
    }
    public function edit_categories($id = false)

    {
        $categories = new categoriesModel();
        $data_categories = $categories->find($id);
        $wishlistModel = new WishlistModel();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => 'active',
            'hero' => 'hero hero-normal',
            'wishlist' =>  $wishlistModel->where('id_user', user()->id)->findAll(),
            'data_categories' => $data_categories,
            'cart' => \Config\Services::cart(),
        ];
        return view('home/edit_categories', $data);
    }
    public function add_categories()
    {
        $wishlistModel = new WishlistModel();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => 'active',
            'hero' => 'hero hero-normal',
            'wishlist' =>  $wishlistModel->where('id_user', user()->id)->findAll(),
            'cart' => \Config\Services::cart(),

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
        $validate = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'You Have to Fill This Field',
                ],
            ],
            'images' => [
                'label' => 'Images',
                'rules' => 'uploaded[images]|max_size[images,5120]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'You must choose an image',
                    'max_size' => 'Maximum File 5 Mb',
                    'is_image' => 'Only images files',
                    'mime_in' =>
                    'Only images file',
                ],
            ],
        ]);
        if (!$validate) {

            return redirect()->back()->withInput();
        }
        $file_images = $this->request->getFile('images');
        // dd($file_images);
        $file_images->move('Assets/img/categories', $file_images->getName());

        $data = [
            'images' =>
            $file_images->getName(),
            'name' => $this->request->getPost('name'),
        ];


        $categories = new categoriesModel();
        $categories->insert($data);

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
            'options' => array('gambar' => $this->request->getPost('gambar'), 'berat' => $this->request->getPost('berat'))
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
        $berat_produk = $this->request->getPost('berat_produk');
        $harga_produk = $this->request->getPost('harga_produk');
        $gambar_produk = $this->request->getPost('gambar_produk');
        $id_user = user()->id;
        $data = [
            'id_produk' => $id_produk,
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk,
            'berat_produk' => $berat_produk,
            'gambar_produk' => $gambar_produk,
            'id_user' => $id_user,
        ];
        $wishlistModel->save($data);
        return redirect()->back()->withInput();
    }

    public function view_wishlist()
    {
        $wishlistModel = new wishlistModel();
        $wishlist = $wishlistModel->where('id_user', user()->id)->findAll();
       
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'wishlist' => $wishlist,
            'cart' => \Config\Services::cart()      
        ]; 
        return view('home/view_wishlist', $data);
    }

    public function delete_wishlist($id_wishlist)
    {
        $wishlistModel = new wishlistModel();
        $wishlistModel->delete($id_wishlist);
        return redirect()->back()->withInput();
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
        $nama_provinsi = $this->request->getPost('nama_provinsi');
        $kabupaten = $this->request->getPost('kabupaten');
        $nama_kabupaten = $this->request->getPost('nama_kabupaten');
        $service = $this->request->getPost('service');
        $ongkir = $this->request->getPost('jasa');
        $kurir = $this->request->getPost('kurir');
        $status = $this->request->getPost('status');
        $id_user = user()->id;
        
        $data = [
            'ongkir' => $ongkir,
            'nama' => $nama,
            'total_keranjang' => $total_keranjang,
            'alamat' => $alamat,
            'keterangan' => $keterangan,
            'provinsi' => $provinsi,
            'nama_provinsi' => $nama_provinsi,
            'kabupaten' => $kabupaten,
            'nama_kabupaten' => $nama_kabupaten,
            'service' => $service,
            'kurir' => $kurir,
            'status' => $status,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
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
        $categories = new categoriesModel();
        $all_data = $categories->findAll();
        $checkout = $checkoutModel->where('id_user', user()->id)->findAll();
        $wishlistModel = new WishlistModel();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => 'active',
            'hero' => 'hero hero-normal',
            'all_data' => $all_data,
            'wishlist' =>  $wishlistModel->where('id_user', user()->id)->findAll(),
            'checkout' => $checkout,
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
        $wishlistModel = new WishlistModel();
        $categories = new categoriesModel();
        $all_data = $categories->findAll();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'cart' => \Config\Services::cart(),
            'checkout' => $checkoutModel->find($id_order),
            'pesanan' => $query_psn->getResult(),
            'bank' => $bankModel->findAll(),
            'wishlist' => $wishlistModel->where('id_user', user()->id)->findAll(),
            'tgl' => $tgl,
            'all_data' => $all_data,
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

    public function bukti_bayar($id_order)
    {
        $wishlistModel = new WishlistModel();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'cart' => \Config\Services::cart(),
            'id_order' => $id_order,
            'wishlist' => $wishlistModel->where('id_user', user()->id)->findAll(),
        ];
        return view('home/bukti_bayar', $data);
    }

    public function update_bukti_bayar($id_order)
    {
        $checkoutModel = new Checkout();
        $checkout = $checkoutModel->where('id', $id_order)->findAll();
        $wishlistModel = new WishlistModel();
        $data = [
            'section_navbar_title1' => null,
            'section_navbar_title2' => null,
            'section_navbar_title3' => null,
            'hero' => 'hero hero-normal',
            'cart' => \Config\Services::cart(),
            'id_order' => $id_order,
            'checkout' => $checkout,
            'wishlist' => $wishlistModel->where('id_user', user()->id)->findAll(),
        ];
        return view('home/update_bukti_bayar', $data);
    }

    public function upload_bukti_bayar($id_order)
    {
        $checkoutModel = new Checkout();
        $validated = $this->validate([
            'bukti' => [
                'label' => 'Image File',
                'rules' => 'uploaded[bukti]'
                    . '|is_image[bukti]'
                    . '|mime_in[bukti,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[bukti,1000]',
            ],
        ]);
        if(!$validated){
            return redirect()->back()->withInput();
        }

        $bukti = $this->request->getFile('bukti');
        $bukti->move('uploads/bukti', $bukti->getName());
        $data = [
            'bukti_bayar' => $bukti->getName(),
        ];
        $checkoutModel->update($id_order, $data);

        return redirect()->to('/view_order');
    }

    public function pesanan_masuk()
    {
        $checkoutModel = new Checkout();
        $checkout = $checkoutModel->findAll();
        $data = [
            'checkout' => $checkout,
        ];
        return view('pegawai/pesanan/list_pesanan', $data);
    }

    public function status_pesanan()
    {
        $checkoutModel = new Checkout();
        $id = $this->request->getPost('id');
        $status = $this->request->getPost('status');
        $data = array(
            'status' => $status,
        );
        $checkoutModel->update($id, $data);
        return redirect()->to("/pesanan_masuk");

    }

    public function delete_pesanan($id_order)
    {
        $checkoutModel = new Checkout();
        $checkoutModel->delete($id_order);
        return redirect()->to("/pesanan_masuk");

    }

    public function finish_order($id_order)
    {
        $checkoutModel = new Checkout();
        $data = [
            'status' => "Selesai"
        ];
        $checkoutModel->update($id_order, $data);
        return redirect()->to("/view_order");

    }

    public function detail_pesanan($id_order)
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
        return view('pegawai/pesanan/invoice', $data);
    }
}
