<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sucursal extends CI_Controller {

	public function index()
	{

        if($this->session->userdata('tipo')=='admin')
        {
            $lista=$this->sucursal_model->listasucursal();
            $data['sucursal']=$lista;
            $listadeshabilitados=$this->sucursal_model->listasucursaldeshabilitados();
            $data['sucursaldeshabilitados']=$listadeshabilitados;

            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('sucursal/sucursal_lista_read',$data);
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        }
        else
        {
            redirect('usuarios/panel','refresh');
        }
		
	}
    public function agregar()
	{
      
        $this->load->view('inc/headergentelella');
        $this->load->view('inc/sidebargentelella');
        $this->load->view('inc/topbargentelella');
        $this->load->view('sucursal/sucursal_formulario_insert',);
        $this->load->view('inc/creditosgentelella');
        $this->load->view('inc/footergentelella');
	}

    public function agregarbd()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules(
            'nombresucursal',
            'Nombre de la sucursal',
            'required|min_length[3]|max_length[30]',//|alpha evita que se pueda poner espacion en el campo
            array(
                'required'=>'Se requiere ingresar la categoría del producto.',
                'min_length'=>'La categoría debe tener al menos 3 caracteres.',
                'max_length'=>'¡La categoría no debe contener más de 30 caracteres!.',
                'alpha'=>'La categoría solo debe contener letras!'
                )
            );
        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('sucursal/sucursal_formulario_insert',);
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        }
        else{
            $data['nombreSucursal']=strtoupper($_POST['nombresucursal']);
            $data['direccion']=strtoupper($_POST['direccion']);
            $this->sucursal_model->agregarsucursal($data);
            redirect('sucursal/index','refresh');
        }
    }

        public function eliminarbd()
    {
        $idsucursal=$_POST['idsucursal'];
        $this->sucursal_model->eliminarsucursal($idsucursal);
        redirect('sucursal/index','refresh');
        
    }
        public function modificar()
    {
        $idsucursal=$_POST['idsucursal'];
        $data['infomarca']=$this->sucursal_model->recuperarsucursal($idsucursal);
        $this->load->view('inc/headergentelella');
        $this->load->view('inc/sidebargentelella');
        $this->load->view('inc/topbargentelella');
        $this->load->view('sucursal/sucursal_formulario_update',$data);
        $this->load->view('inc/creditosgentelella');
        $this->load->view('inc/footergentelella');
    }

        public function modificarbd()
    {
        $idsucursal=$_POST['idsucursal'];
        $data['nombreSucursal']=strtoupper($_POST['nombresucursal']);
        $data['direccion']=strtoupper($_POST['direccion']);
        $data['fechaActualizacion']=date('Y-m-d H:i:s');
        $this->sucursal_model->modificarsucursal($idsucursal,$data);
        redirect('sucursal/index','refresh');
    }

        public function deshabilitarbd($idsucursal)
    {
       
        $data['estado']='0';
        $this->sucursal_model->modificarsucursal($idsucursal,$data);
        redirect('sucursal/index','refresh');
    }

        public function habilitarbd()
    {
        $idsucursal=$_POST['idsucrusal'];
        $data['estado']='1';
        $this->sucursal_model->modificarsucursal($idsucursal,$data);
        redirect('sucursal/index','refresh');
    }


  }
