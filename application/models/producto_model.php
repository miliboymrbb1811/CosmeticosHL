<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

	public function listaproductos()//select
	{
        $this->db->select('idProducto,nombreProducto,foto,precio,codigo,stock,producto.estado,producto.fechaRegistro,producto.fechaActualizacion,producto.idCategoria,nombreCategoria,producto.idMarca,producto.descripcion,nombreMarca'); //select *
        $this->db->FROM('producto'); //tabla producto
        $this->db->where('producto.estado','1'); //condición where estado = 1
        $this->db->JOIN('categoria', 'producto.idCategoria = categoria.idCategoria');
        $this->db->JOIN('marca', 'producto.idMarca = marca.idMarca');//inner join a una segunda tabla
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','1');)
        return $this->db->get(); //devolucion del resultado de la consulta
	}
    public function agregarproductos($data)//create
    {
        $this->db->insert('producto',$data); //tabla
    }
    public function eliminarproductos($idproducto)//delete
    {
        $this->db->where('idProducto',$idproducto); //condición where id
        $this->db->delete('producto'); //tabla
    }
    public function recuperarproductos($idproducto)//get
    {
        $this->db->select('*'); //select *
        $this->db->FROM('producto'); //tabla
        $this->db->where('idProducto',$idproducto);
        $this->db->JOIN('categoria', 'producto.idCategoria = categoria.idCategoria');
        $this->db->JOIN('marca', 'producto.idMarca = marca.idMarca');
         //condición where id
        return $this->db->get(); //devolucion del resultado de la consulta
    }

    public function modificarproductos($idproducto,$data)//update
    {
        $this->db->where('idProducto',$idproducto);
        $this->db->update('producto',$data);
    }
    public function listaproductosdeshabilitados()//select
    {
        $this->db->select('idProducto,foto,precio,codigo,stock,producto.estado,producto.fechaRegistro,producto.fechaActualizacion,producto.idCategoria,nombreCategoria,producto.idMarca,nombreMarca'); //select *
        $this->db->FROM('producto'); //tabla producto
        $this->db->where('producto.estado','0'); //condición where estado = 1
        $this->db->JOIN('categoria', 'producto.idCategoria = categoria.idCategoria');
        $this->db->JOIN('marca', 'producto.idMarca = marca.idMarca');
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','0');)
        return $this->db->get(); //devolucion del resultado de la consulta
    }

}
