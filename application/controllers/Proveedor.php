<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Proveedor extends CI_Controller
{

    public function index()
    {
if ($this->session->userdata('tipo') == 'admin') {
    $lista = $this->proveedor_model->listaproveedor();
    $data['proveedor'] = $lista;

    $views = [
        'inc/headergentelella',
        'inc/sidebargentelella',
        'inc/topbargentelella',
        'proveedor/proveedor_lista_read',
        'inc/creditosgentelella',
        'inc/footergentelella'
    ];

    foreach ($views as $view) {
        $this->load->view($view, $data);
    }
} else {
    redirect('usuarios/panel', 'refresh');
}
    }

    public function agregar()
    {

        $this->load->view('inc/headergentelella');
        $this->load->view('inc/sidebargentelella');
        $this->load->view('inc/topbargentelella');
        $this->load->view('proveedor/proveedor_formulario_insert',);
        $this->load->view('inc/creditosgentelella');
        $this->load->view('inc/footergentelella');
    }

    public function agregarbd()
    {
        $this->load->library('form_validation');

        //atributo, 
        //Alias(ponle cualquier wea),
        //atributos de control, array -> asignar mensajes empleadolizados al atributo de control.
        $this->form_validation->set_rules('razonsocial', 'Razon social', 'min_length[2]|max_length[60]', [
            'min_length' => 'La Razon social debe tener al menos 2 caracteres.',
            'max_length' => '¡La Razon social no debe contener más de 60 caracteres!.'
        ]);

        $this->form_validation->set_rules('departamento', 'Departamento ', 'min_length[4]|max_length[10]', [
            'min_length' => 'El departamento debe tener al menos 4 caracteres.',
            'max_length' => '¡El departamento no debe contener más de 10 caracteres!.',
    
        ]);

        $this->form_validation->set_rules('ubicasion', 'Ubicasion', 'min_length[4]|max_length[50]', [
            'min_length' => 'La ubicasion debe tener al menos 4 caracteres.',
            'max_length' => '¡La ubicasion no debe contener más de 50 caracteres!.',
        ]);

        $this->form_validation->set_rules('numerocuenta', 'Número de cuenta bancaria', 'min_length[4]|max_length[50]|is_natural', [
            'min_length' => 'El departamento debe tener al menos 4 caracteres.',
            'max_length' => '¡Solo se pued ingresar numero de cuenta de maximo de 50 numero !.',
            'is_natural' => '¡No ingrese caracteres que no sean números!.'
        ]);

        $this->form_validation->set_rules('celular', 'Número de celular', 'min_length[8]|max_length[8]|is_natural', [
            'min_length' => '¡Ingrese un número de celular válido!.',
            'max_length' => '¡El número de celular no debe contener más de 8 caracteres!.',
            'is_natural' => '¡No ingrese caracteres que no sean números!.'
        ]);

        $this->form_validation->set_rules('descripcion', 'Descripcion ', 'min_length[4]|max_length[50]', [
            'min_length' => 'La descripcion debe tener al menos 4 caracteres.',
            'max_length' => '¡La descripcion no debe contener más de 50 caracteres!.',
        ]);

        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('inc/headergentelella');
            $this->load->view('inc/sidebargentelella');
            $this->load->view('inc/topbargentelella');
            $this->load->view('proveedor/proveedor_formulario_insert');
            $this->load->view('inc/creditosgentelella');
            $this->load->view('inc/footergentelella');
        } else {
            $data = [
                'razonsocial' => strtoupper($_POST['razonsocial']),
                'departamento' => strtoupper($_POST['departamento']),
                'direccion' => strtoupper($_POST['ubicasion']),
                'descripcion' => strtoupper($_POST['descripcion']),
                'numerocuenta' => $_POST['numerocuenta'],
                'celular' => $_POST['celular']
            ];

            $this->proveedor_model->agregarproveedor($data);
            redirect('proveedor/index', 'refresh');
        }
    }
    

    public function eliminarbd()
    {
        $idproveedor = $_POST['idproveedor'];
        $this->cliente_model->eliminarempleado($idproveedor);
        redirect('cliente/index', 'refresh');
    }
    public function modificar()
    {
        $idproveedor = $_POST['idproveedor'];
        $data['infoproveedor'] = $this->proveedor_model->recuperarproveedor($idproveedor);
        $views = ['inc/headergentelella', 'inc/sidebargentelella', 'inc/topbargentelella', 'proveedor/proveedor_formulario_update', 'inc/creditosgentelella', 'inc/footergentelella'];
        foreach ($views as $view) {
            $this->load->view($view, $data);
        }
    }

    public function modificarbd()
    {

        $idproveedor = $_POST['idproveedor'];
        $data = [
            'idproveedor' => $idproveedor,
            'razonsocial' => mb_strtoupper($_POST['razonsocial']),
            'departamento' => mb_strtoupper($_POST['departamento']),
            'direccion' => mb_strtoupper($_POST['ubicasion']),
            'descripcion' => mb_strtoupper($_POST['descripcion']),
            'numerocuenta' => $_POST['numerocuenta'],
            'celular' => $_POST['celular']
        ];

        $this->proveedor_model->modificarproveedor($idproveedor, $data);
        redirect('proveedor/index', 'refresh');
    }

    public function deshabilitarbd($idproveedor)
    {

        $data['estado'] = '0';
        $this->proveedor_model->modificarproveedor($idproveedor, $data);
        redirect('proveedor/index', 'refresh');
    }

    public function deshabilitados()
    {

        if ($this->session->userdata('tipo') == 'admin') {
            $lista = $this->proveedor_model->listaproveedordeshabilitados();

            $data['proveedor'] = $lista;

            $views = [
                'inc/headergentelella',
                'inc/sidebargentelella',
                'inc/topbargentelella',
                'proveedor/proveedor_listadeshabilitados_read',
                'inc/creditosgentelella',
                'inc/footergentelella'
            ];

            foreach ($views as $view) {
                $this->load->view($view, $data);
            }
        } else if ($this->session->userdata('tipo') == 'vendedor') {
        
        }
    }


    public function habilitarbd()
    {
        $idproveedor = $_POST['idproveedor'];
        $data['estado'] = '1';
        $this->proveedor_model->modificarproveedor($idproveedor, $data);
        redirect('proveedor/deshabilitados', 'refresh');
    }
}
    

