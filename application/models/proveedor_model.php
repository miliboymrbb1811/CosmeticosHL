<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor_model extends CI_Model {


	public function listaproveedor()//select
	{
        $this->db->select('idProveedor, Departamento, numeroCuenta, direccion, descripcion,celular, razonSocial'); //select *
        $this->db->FROM('proveedores'); //tabla productos
        $this->db->where('proveedores.estado','1'); //condición where estado = 1
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','1');)
        return $this->db->get(); //devolucion del resultado de la consulta
	}

    public function agregarproveedor($data)//create
    {
        $this->db->insert('proveedores',$data); //tabla
    }

    public function eliminarproveedor($idproveedor)//delete
    {
        $this->db->where('idproveedor',$idproveedor); //condición where id
        $this->db->delete('proveedores'); //tabla
    }

    public function recuperarproveedor($idroveedor)//get
    {
        $this->db->select('idProveedor, Departamento, numeroCuenta, direccion, descripcion,celular, razonSocial'); //select *
        $this->db->FROM('proveedores'); //tabla productos
        $this->db->where('proveedores.idProveedor',$idroveedor); //condición where estado = 1
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','1');)
        return $this->db->get(); //devolucion del resultado de la consulta
    }


    public function modificarproveedor($idproveedor,$data)//update
    {
        $this->db->where('idproveedor',$idproveedor);
        $this->db->update('proveedores',$data);
    }

    public function listaproveedordeshabilitados()//select
    {
        $this->db->select('idProveedor, Departamento, numeroCuenta, direccion, descripcion,celular, razonSocial'); //select *
        $this->db->FROM('proveedores'); //tabla productos
        $this->db->where('proveedores.estado','0'); //condición where estado = 1
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','1');)
        return $this->db->get(); //devolucion del resultado de la consulta
    }


}
