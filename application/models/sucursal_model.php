<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursal_model extends CI_Model {

	public function listasucursal()//select
	{
        $this->db->select('*'); //select *
        $this->db->FROM('sucursal'); //tabla
        $this->db->where('estado','1');
        return $this->db->get();
	}
        public function listasucursaldeshabilitados()//select
    {
        $this->db->select('*');
        $this->db->FROM('sucursal');
        $this->db->where('estado','0');
        return $this->db->get(); //devolucion del resultado de la consulta
    }
    public function agregarsucursal($data)//create
    {
        $this->db->insert('sucursal',$data); //tabla
    }
    public function eliminarsucursal($idsucursal)//delete
    {
        $this->db->where('idSucursal',$idsucursal); //condición where id
        $this->db->delete('sucursal'); //tabla
    }
    public function recuperarsucursal($idsucursal)//get
    {
        $this->db->select('*'); //select *
        $this->db->FROM('sucursal'); //tabla
        $this->db->where('idSucursal',$idsucursal);
        return $this->db->get(); //devolucion del resultado de la consulta
    }
    public function modificarsucursal($idsucursal,$data)//update
    {
        $this->db->where('idSucursal',$idsucursal);
        $this->db->update('sucursal',$data);
    }


}
