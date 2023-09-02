<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reporte_model extends CI_Model
{

    public function listaventa() //select
    {
        $this->db->select('*'); //select *
        $this->db->FROM('venta'); //tabla producto
        $this->db->where('venta.estado', '1'); //condición where estado = 1
        $this->db->ORDER_BY('idVenta', 'desc');
        $this->db->JOIN('cliente', 'cliente.idCliente=venta.idCliente');
        $this->db->JOIN('persona', 'persona.idPersona=cliente.idPersona');
        $this->db->JOIN('Usuario', 'Usuario.idUsuario=venta.idUsuario');
        $this->db->JOIN('empleado', 'Usuario.idEmpleado=empleado.idEmpleado');
        $this->db->JOIN('sucursal', 'sucursal.idSucursal=empleado.idSucursal');

        //inner join a una segunda tabla
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','1');)
        return $this->db->get(); //devolucion del resultado de la consulta
    }
    public function listaventa_filtro($inicio, $fin)
    {

        $this->db->select("
        *
        from venta V
        INNER JOIN cliente ON cliente.idCliente=V.idCliente
        INNER JOIN persona ON persona.idPersona=cliente.idPersona
        INNER JOIN Usuario ON Usuario.idUsuario=V.idUsuario
        where V.estado=1 AND V.fechaRegistro
        between '" . $inicio . "' AND '" . $fin . " 23:59:59'
        order by idVenta desc,1
            ");
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','0');)
        return $this->db->get();
    }
    public function totalvendido() //select
    {

        $this->db->select("
        sum(total) as totall
        from venta V
        where V.estado=1 
            ");
        return $this->db->get();
    }
    public function totalvendido_filtro($inicio, $fin) //select
    {

        $this->db->select("
        sum(total) as totall
        from venta V
        where V.estado=1 AND V.fechaRegistro
        between '" . $inicio . "' AND '" . $fin . " 23:59:59'
            ");
        return $this->db->get();
    }
    public function listaventarechasada() //select
    {
        $this->db->select('*'); //select *
        $this->db->FROM('venta'); //tabla producto
        $this->db->where('venta.estado', '0'); //condición where estado = 1
        $this->db->JOIN('cliente', 'cliente.idCliente=venta.idCliente');
        $this->db->JOIN('persona', 'persona.idPersona=cliente.idPersona');
        $this->db->JOIN('Usuario', 'Usuario.idUsuario=venta.idUsuario');
        //inner join a una segunda tabla
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','1');)
        return $this->db->get(); //devolucion del resultado de la consulta
    }

    public function detalle($idventa) //select
    {

        $this->db->select('*'); //select *
        $this->db->FROM('detalle'); //tabla producto //condición where estado = 1
        $this->db->where('venta.idVenta', $idventa);
        $this->db->JOIN('venta', 'venta.idVenta=detalle.idVenta');
        $this->db->JOIN('producto ', 'producto.idProducto=detalle.idProducto');
        $this->db->JOIN('categoria', 'categoria.idCategoria=producto.idCategoria');
        $this->db->JOIN('marca', 'marca.idMarca=producto.idMarca');
        $this->db->JOIN('cliente', 'cliente.idCliente=venta.idCliente');
        $this->db->JOIN('persona', 'persona.idPersona=cliente.idPersona');


        //inner join a una segunda tabla
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','1');)
        return $this->db->get(); //devolucion del resultado de la consulta
    }
    public function detalle1() //select
    {

        $this->db->select('*'); //select *
        $this->db->FROM('detalle'); //tabla producto //condición where estado = 1
        $this->db->JOIN('venta', 'venta.idVenta=detalle.idVenta');
        $this->db->JOIN('producto ', 'producto.idProducto=detalle.idProducto');
        $this->db->JOIN('categoria', 'categoria.idCategoria=producto.idCategoria');
        $this->db->JOIN('marca', 'marca.idMarca=producto.idMarca');
        $this->db->JOIN('cliente', 'cliente.idCliente=venta.idCliente');
        $this->db->JOIN('persona', 'persona.idPersona=cliente.idPersona');

        //inner join a una segunda tabla
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','1');)
        return $this->db->get(); //devolucion del resultado de la consulta
    }


    public function listaproductosdeshabilitados() //select
    {
        $this->db->select('idProducto,foto,precio,codigo,stock,producto.estado,producto.fechaRegistro,producto.fechaActualizacion,producto.idCategoria,nombreCategoria,producto.idMarca,nombreMarca'); //select *
        $this->db->FROM('producto'); //tabla producto
        $this->db->where('producto.estado', '0'); //condición where estado = 1
        $this->db->JOIN('categoria', 'producto.idCategoria = categoria.idCategoria');
        $this->db->JOIN('marca', 'producto.idMarca = marca.idMarca');
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','0');)
        return $this->db->get(); //devolucion del resultado de la consulta
    }
    public function cantidaddeclientes() //select
    {
        $this->db->FROM('cliente'); //tabla producto
        $this->db->where('estado', '1'); //condición where estado = 1
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','0');)
        return $this->db->count_all_results(); //devolucion del resultado de la consulta
    }
    public function cantidadventascanseladas() //select
    {
        $this->db->FROM('venta'); //tabla producto
        $this->db->where('estado', '0'); //condición where estado = 1
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','0');)
        return $this->db->count_all_results(); //devolucion del resultado de la consulta
    }
    public function cantidadventasefectivas() //select
    {
        $this->db->FROM('venta'); //tabla producto
        $this->db->where('estado', '1'); //condición where estado = 1
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','0');)
        return $this->db->count_all_results(); //devolucion del resultado de la consulta
    }
    public function cantidadempleados() //select
    {
        $this->db->FROM('empleado'); //tabla producto
        $this->db->where('estado', '1');
        $this->db->or_where('estado', '2');
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','0');)
        return $this->db->count_all_results(); //devolucion del resultado de la consulta
    }


    public function total_productos_modelo()
    {
        $this->db->select('
            (SELECT nombreMarca FROM marca WHERE idMarca=10) AS nombre1,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=8 AND idMarca=10) AS LA_SUPREMA1,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=9 AND idMarca=10) AS LA_SUPREMA2,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=10 AND idMarca=10) AS LA_SUPREMA3,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=11 AND idMarca=10) AS LA_SUPREMA4,
            (SELECT COUNT(idProducto) FROM producto WHERE idMarca=10) AS totala,
            (SELECT nombreMarca FROM marca WHERE idMarca=7) AS nombre2,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=8 AND idMarca=7) AS BONABELI1,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=9 AND idMarca=7) AS BONABELI2,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=10 AND idMarca=7) AS BONABELI3,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=11 AND idMarca=7) AS BONABELI4,
            (SELECT COUNT(idProducto) FROM producto WHERE idMarca=7) AS totalb,
            (SELECT nombreMarca FROM marca WHERE idMarca=9) AS nombre3,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=8 AND idMarca=9) AS LAZZARONI1,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=9 AND idMarca=9) AS LAZZARONI2,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=10 AND idMarca=9) AS LAZZARONI3,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=11 AND idMarca=9) AS LAZZARONI4,
            (SELECT COUNT(idProducto) FROM producto WHERE idMarca=9) AS totalc,
            (SELECT nombreMarca FROM marca WHERE idMarca=6) AS nombre4,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=8 AND idMarca=6) AS EMILIANA1,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=9 AND idMarca=6) AS EMILIANA2,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=10 AND idMarca=6) AS EMILIANA3,
            (SELECT COUNT(idProducto) FROM producto WHERE estado=1 AND idCategoria=11 AND idMarca=6) AS EMILIANA4,
            (SELECT COUNT(idProducto) FROM producto WHERE idMarca=6) AS totald');
        return $this->db->get();
    }
    public function total_productos_ventas()
    {

        $this->db->select('nombreProducto,Sum(detalle.cantidad*producto.precio)as total,foto'); //select *
        $this->db->FROM('producto'); //tabla producto
        $this->db->where('venta.estado', '1'); //condición where estado = 1
        $this->db->JOIN('detalle', 'detalle.idProducto=producto.idProducto');
        $this->db->JOIN('venta', 'venta.idVenta=detalle.idVenta');
        $this->db->order_by('1', 'asc', '1');
        $this->db->limit('6');
        $this->db->group_by('nombreProducto');
       

        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','0');)
        return $this->db->get();
    }
    public function total_productos_ventas_filtro($inicio, $fin)
    {

        $this->db->select("
        P.nombreProducto,Sum(D.cantidad*P.precio) as total, P.foto
        from producto P
        inner join detalle D on D.idProducto=P.idProducto
        inner join Venta V on V.idVenta=D.idVenta
        where V.estado=1 AND V.fechaRegistro
        between '" . $inicio . "' AND '" . $fin . " 23:59:59'
        group by P.nombreProducto
        order by 2 desc, 1
        limit 6
            ");
        //si se gusta añadir una especie de AND de SQL se puede repetir nuevamente la línea previa a este comentario. ($this->db->where('estado','0');)
        return $this->db->get();
    }


    public function total_productos_ventas_grafico()
    {

        $this->db->select('nombreProducto,Sum(detalle.cantidad*producto.precio)as total'); //select *
        $this->db->FROM('producto'); //tabla producto
        $this->db->where('venta.estado', '1'); //condición where estado = 1
        $this->db->JOIN('detalle', 'detalle.idProducto=producto.idProducto');
        $this->db->JOIN('venta', 'venta.idVenta=detalle.idVenta');
        $this->db->order_by('1', 'asc', '1');
        $this->db->limit('6');
        $this->db->group_by('nombreProducto');
       

        $records = $this->db->get()->result();

        $response2 = array();
      

        foreach ($records as $row) {
            $response2[] = array(
                "value" => $row->total,
                "name" => $row->nombreProducto
            );
         }
      return $response2;

    }
    public function graficoingresos22()
    {
        $this->db->select("
        MONTHNAME(v.fechaRegistro) AS Mes,
        SUM(v.total) AS Total
        FROM venta v
        where estado=1 and YEAR(v.fechaRegistro) = '2020'
        GROUP BY Mes
        ORDER BY(v.fechaRegistro) asc
            ");        
        $records = $this->db->get()->result();

        $response2 = array();

        foreach ($records as $row) {
            $response2[] = array(
               "veinte" => array(
                "mes" => $row->Mes,
                "total" => $row->Total,
             )
            );
         }

         $this->db->select("
         MONTHNAME(v.fechaRegistro) AS Mes,
         SUM(v.total) AS Total
         FROM venta v
         where estado=1 and YEAR(v.fechaRegistro) = '2021'
         GROUP BY Mes
         ORDER BY(v.fechaRegistro) asc
             ");        
         $records = $this->db->get()->result();
 

 
         foreach ($records as $row) {
             $response2[] = array(
                "veintiuno" => array(
                 "mes" => $row->Mes,
                 "total" => $row->Total,
              )
             );
          }
      

        $this->db->select("
        MONTHNAME(v.fechaRegistro) AS Mes,
        SUM(v.total) AS Total
        FROM venta v
        where estado=1 and YEAR(v.fechaRegistro) = '2022'
        GROUP BY Mes
        ORDER BY(v.fechaRegistro) asc
            ");        
        $records = $this->db->get()->result();

      

        foreach ($records as $row) {
            $response2[] = array(
               "veintidos" => array(
                "mes" => $row->Mes,
                "total" => $row->Total,
             )
            );
         }
      return $response2;
    }
    public function graficoingresos21()
    {
        $this->db->select("
        MONTHNAME(v.fechaRegistro) AS Mes,
        SUM(v.total) AS Total
        FROM venta v
        where estado=1 and YEAR(v.fechaRegistro) = '2021'
        GROUP BY Mes
        ORDER BY(v.fechaRegistro) asc
            ");        
        $records = $this->db->get()->result();

        $response1 = array();
         foreach ($records as $row) {
            $response1[] = array(
               "mes" => $row->Mes,
               "total" => $row->Total,
            );
         }
      return $response1;
    }
    public function graficocliente()
    {
        $this->db->query("set lc_time_names='es_ES'");
        
        $this->db->select("
        MONTHNAME(P.fechaRegistro) AS Mes,
        SUM( CASE WHEN C.estado IS NULL THEN 0 ELSE C.estado END) as Total
        FROM cliente C
        inner join persona P on C.idPersona=P.idPersona
        where C.estado=1 and C.idPersona=P.idPersona  and YEAR(P.fechaRegistro) = '2022'
        GROUP BY Mes");        
        $records = $this->db->get()->result();

        $response1 = array();
         foreach ($records as $row) {
            $response1[] = array(
               "name" => $row->Mes,
               "value" => $row->Total,
            );
         }
      return $response1;
    }

    public function graficosumaproductosmarca()
    {
        $this->db->select("COUNT(idProducto)  as cantidad ,nombreMarca as marca
        FROM producto 
        inner join marca on marca.idMarca=producto.idMarca
        WHERE producto.estado='1' 
        group by  nombreMarca");        
        $records = $this->db->get()->result();

        $response1 = array();
         foreach ($records as $row) {
            $response1[] = array(
               "name" => $row->marca,
               "value" => $row->cantidad,
            );
         }
      return $response1;
    }
   
     
}
