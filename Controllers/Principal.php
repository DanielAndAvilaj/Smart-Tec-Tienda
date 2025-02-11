<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        
    }
    //Vista about
    public function about()
    {
        $data['title'] = 'Nuestro Equipo';
        $this->views->getView('principal', "about", $data);
    }
    //Vista shop
    public function shop()
    {
        $data['title'] = 'Nuestros Productos';
        $data['productos'] = $this->model->getProductos();
        $this->views->getView('principal', "shop", $data);
    }
    //Vista detail
    public function detail($id_producto)
    {
        $data['producto'] = $this->model->getProducto($id_producto);
        $data['title'] = $data['producto'][0]['nombre'];
        $this->views->getView('principal', "detail", $data);
    }
    //Vista contactos
    public function contactos()
    {
        $data['title'] = 'Contactos';
        $this->views->getView('principal', "contact", $data);
    }
}