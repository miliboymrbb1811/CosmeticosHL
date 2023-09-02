<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Venta_model extends CI_Model
{


   public function listaventa() //select
   {
      $this->db->select('venta.idVenta, persona.nombre,persona.primerApellido,total,venta.fechaRegistro, venta.estado'); //select *
      $this->db->FROM('venta'); //tabla productos
      $this->db->JOIN('cliente', 'venta.idCliente = cliente.idCliente');
      $this->db->JOIN('persona', 'cliente.idPersona = persona.idPersona');
      $this->db->order_by('venta.fechaRegistro','desc');

      //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','1');)
      return $this->db->get(); //devolucion del resultado de la consulta
   }


   public function buscarProducto($data) //get
   {
      $this->db->like('marca.nombreMarca', $data);
      $this->db->FROM('producto'); //tabla productos
      $this->db->where('producto.estado', '1'); //condición where estado = 1
      $this->db->JOIN('marca', 'marca.idMarca = producto.idMarca');
      return $this->db->get();
   }


   public function getProducts($postData)
   {

      $response2 = array();
      if (isset($postData['search'])) {
         // Select record
         $this->db->select('*');
         $this->db->FROM('bddMilivoy.producto'); //tabla productos
         $this->db->JOIN('bddMilivoy.marca ', 'marca.idMarca = producto.idMarca');
         $this->db->JOIN('bddMilivoy.categoria', 'categoria.idCategoria = producto.idCategoria');
         $this->db->where("producto.nombreProducto like '%" . $postData['search'] . "%' ");
         $this->db->where('producto.estado', '1'); //condición where estado = 1


         $records = $this->db->get()->result();


         foreach ($records as $row) {
            $value = $row->nombreProducto . ' - ' . $row->nombreMarca;
            $response2[] = array(
               "value" => $value,
               "nombre" => $row->nombreProducto,
               "categoria" => $row->nombreCategoria,
               "marca" => $row->nombreMarca,
               "precioUnitario" => $row->precio,
               "idProducto" => $row->idProducto,
               "foto" => $row->foto,
               "stock" => $row->stock,
               "codigo" => $row->codigo,
            );
         }
      }
      return $response2;
   }



   // function getClients($postData,$idProducto){

   //     $response2 = array();
   //     if(isset($postData['search']) ){
   //       // Select record
   //       $this->db->select('*');
   //       $this->db->FROM('bddMilivoy.marca'); //tabla productos
   //       $this->db->JOIN('bddMilivoy.producto ', 'marca.idMarca = producto.idMarca');
   //       $this->db->where("persona.marca like '%".$postData['search']."%' ");
   //       $this->db->where('producto.idProducto',$idProducto); //condición where estado = 1

   //       $records = $this->db->get()->result();

   //       foreach($records as $row ){
   //          $response2[] = array("value"=>$row->nombreMarca,"primerApellido"=>$row->primerApellido
   //          ,"segundoApellido"=>$row->segundoApellido,"carnet"=>$row->numeroCI);
   //         }

   //     }
   //     return $response2;
   //  }

   function getMarcas($postData)
   {

      $response2 = array();
      if (isset($postData['search'])) {
         // Select record
         $this->db->select('*');
         $this->db->FROM('bddMilivoy.marca'); //tabla productos
         $this->db->JOIN('bddMilivoy.producto ', 'marca.idMarca = producto.idMarca');
         $this->db->where("persona.marca like '%" . $postData['search'] . "%' ");
         $this->db->where('producto.nombreProducto', $postData); //condición where estado = 1

         $records = $this->db->get()->result();

         foreach ($records as $row) {
            $response2[] = array(
               "value" => $row->nombreMarca,
                "primerApellido" => $row->primerApellido,
                "segundoApellido" => $row->segundoApellido, 
                "carnet" => $row->numeroCI
            );
         }
      }
      return $response2;
   }




   public function registrar($data)
   {
      //Iniciamos la transacción.    
      $this->db->trans_begin();
      //Intenta insertar un cliente.    
      $this->db->insert('venta', array(
         'idCliente' => $data['idCliente'],
         'idUsuario' => $data['idUsuario'],
         'total'=> $data['total'],
         'estado' => 1,
      ));
      //Recuperamos el id del cliente registrado.    
      $venta_id = $this->db->insert_id();
      //Insertamos los servicios que desea adquirir el cliente.     

         $idProductos = $data['idProducto'];
         $cantidades = $data['cantidad'];
         $subtotal = $data['subtotal'];
         $stock = $data['stock'];
        $count = 0; 
       while ($count < count($idProductos)) {
         $this->db->insert('detalle', array(
            'idVenta' => $venta_id,
            'idProducto' => $idProductos[$count],
            'cantidad' => $cantidades[$count],
            'precioTotal' => $subtotal[$count],
         ));

         // Aqui actualizamos el stock de los productos yucaboy cuidado que te confundas ajajja
         $stockAc = $stock[$count] - $cantidades[$count];
         $this->db->where('idProducto', $idProductos[$count]);
         $this->db->update('producto',  array(
            'stock' => $stockAc,
         ));

         $count ++;
       }

      if ($this->db->trans_status() === FALSE) {
         //Hubo errores en la consulta, entonces se cancela la transacción.   
         $this->db->trans_rollback();
         return false;
      } else {
         //Todas las consultas se hicieron correctamente.  
         $this->db->trans_commit();
         return true;
      }
   }

   public function actualizar($idVenta,$data)
   {
      $this->db->where('idVenta', $idVenta);
      $this->db->update('venta',  array(
         'idCliente' => $data['idCliente'],
         'idUsuario' => $data['idUsuario'],
         'estado' => $data['estado'],
      ));

      $this->db->where('idVenta', $idVenta);
      $this->db->update('detalle', array(
         'idProducto' => $data['idProducto'],
         'cantidad' => $data['cantidad'],
         'precioTotal' => $data['precioTotal'],
      ));

   }


   public function recuperarVenta($idVenta) //get
   {
      $this->db->select('*'); //select *
      $this->db->FROM('venta'); //tabla productos
      $this->db->where('venta.idVenta', $idVenta); //condición where estado = 1
      $this->db->JOIN('cliente', 'venta.idCliente = cliente.idCliente');
      $this->db->JOIN('persona', 'cliente.idPersona = persona.idPersona');
      $this->db->JOIN('detalle', 'venta.idVenta = detalle.idVenta');
      $this->db->JOIN('producto', 'producto.idProducto = detalle.idProducto');
      $this->db->JOIN('marca', 'marca.idMarca = producto.idMarca');

      return $this->db->get(); //devolucion del resultado de la consulta

   }
   public function modificarventa($idventa,$data)//update
   {
       $this->db->where('idVenta',$idventa);
       $this->db->update('venta',$data);
   }
//--------------------------------------------------------------------------------------------------//
   public function reporteventa($idventa)
	{

      $this->db->select('*'); //select *
      $this->db->where('venta.idVenta',$idventa);
      $this->db->FROM('venta'); //tabla productos
      //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','1');)
      return $this->db->get(); //devolucion del resultado de la consulta
   
	}
}


