<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Reporte extends CI_Controller
{

    public function index()
    {

        if ($this->session->userdata('tipo') == 'admin') {


            $lista = $this->reporte_model->total_productos_modelo();
            $lista1 = $this->reporte_model->total_productos_ventas();
            $venta = $this->reporte_model->graficoingresos21();
         

            
            $data['totalproductosmodelo'] = $lista;
            $data1['totalproductosmodelo'] = $lista1;

            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('reporte/reporte_lista_read', $data, $data1,$venta);
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        } else {
            redirect('usuarios/panel', 'refresh');
        }
    }

    public function verrechaso()
    {

        if ($this->session->userdata('tipo') == 'admin') {
            $lista = $this->reporte_model->listaventarechasada();
            $data['venta'] = $lista;

            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('reporte/compra_rechasada_lista_read', $data);
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        } else {
            redirect('usuarios/panel', 'refresh');
        }
    }

    public function vermasvendido()
    {

        if ($this->session->userdata('tipo') == 'admin') {
            $lista = $this->reporte_model->total_productos_ventas();
            $data['venta'] = $lista;

            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('reporte/mas_vendido_rechasada_lista_read', $data);
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        } else {
            redirect('usuarios/panel', 'refresh');
        }
    }

    public function verventas()
    {

        if ($this->session->userdata('tipo') == 'admin') {
            $lista = $this->reporte_model->listaventa();
            $lista1 = $this->reporte_model->totalvendido();
            $data['venta'] = $lista;
            $data['a'] = $lista1;

            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('reporte/compra_lista_read', $data);
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        } else {
            redirect('usuarios/panel', 'refresh');
        }
    }
    public function verventas_filtro()
    {

        if ($this->session->userdata('tipo') == 'admin') {

            $fecha_inicio = $_POST['datePrincipio'];
            $fecha_fin = $_POST['dateFin'];
            $lista = $this->reporte_model->listaventa_filtro($fecha_inicio, $fecha_fin);
            $lista1 = $this->reporte_model->totalvendido_filtro($fecha_inicio, $fecha_fin);
            $data['venta'] = $lista;
            $data['a'] = $lista1;

            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('reporte/compra_lista_read', $data);
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        } else {
            redirect('usuarios/panel', 'refresh');
        }
    }
    public function vermasvendido_filtro()
    {

        if ($this->session->userdata('tipo') == 'admin') {
            $fecha_inicio = $_POST['datePrincipio'];
            $fecha_fin = $_POST['dateFin'];
            $lista = $this->reporte_model->total_productos_ventas_filtro($fecha_inicio, $fecha_fin);
            $data['venta'] = $lista;

            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('reporte/mas_vendido_rechasada_lista_read', $data);
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        } else {
            redirect('usuarios/panel', 'refresh');
        }
    }
    public function detalle()
    {

        if ($this->session->userdata('tipo') == 'admin') {
            $lista = $this->reporte_model->detalle1();
            $data['detalle'] = $lista;

            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('reporte/detalle_lista_read', $data);
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        } else {
            redirect('usuarios/panel', 'refresh');
        }
    }

    public function agregar()
    {

        $this->load->view('inc/headergentelella');
        $this->load->view('inc/sidebargentelella');
        $this->load->view('inc/topbargentelella');
        $this->load->view('producto/producto_formulario_insert',);
        $this->load->view('inc/creditosgentelella');
        $this->load->view('inc/footergentelella');
    }

    public function modificar()
    {
        $idproducto = $_POST['idproducto'];
        $data['infoproducto'] = $this->producto_model->recuperarproductos($idproducto);
        $this->load->view('inc/headergentelella');
        $this->load->view('inc/sidebargentelella');
        $this->load->view('inc/topbargentelella');
        $this->load->view('producto/producto_formulario_update', $data);
        $this->load->view('inc/creditosgentelella');
        $this->load->view('inc/footergentelella');
    }



    public function deshabilitarbd($idproducto)
    {
        $data['estado'] = '0';
        $this->producto_model->modificarproductos($idproducto, $data);
        redirect('producto/index', 'refresh');
    }


    public function deshabilitados()
    {
        if ($this->session->userdata('tipo') == 'admin') {
            $lista = $this->producto_model->listaproductosdeshabilitados();
            $data['producto'] = $lista;


            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('producto/producto_listadeshabilitados_read', $data);
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        } else  if ($this->session->userdata('tipo') == 'vendedor') {
            $lista = $this->producto_model->listaproductosdeshabilitados();
            $data['producto'] = $lista;


            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('producto/productoVendedor/producto_listadeshabilitados_read', $data);
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        }
    }

    public function ventaList()
    {
        $data = $this->reporte_model->graficoingresos22();
        echo json_encode($data);
    }
    

    public function mayoresVentasList()
    {
        $data = $this->reporte_model->total_productos_ventas_grafico();
        echo json_encode($data);
    }
     public function mayoresClientes()
    {
        $data = $this->reporte_model->graficocliente();
        echo json_encode($data);
    }
    public function contadorProductos()
    {
        $data = $this->reporte_model->graficosumaproductosmarca();
        echo json_encode($data);
    }
}
