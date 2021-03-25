<?php
    header('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");
    $objCategoria= new Categoria();

    $body=json_decode(file_get_contents("php://input"),true);


    switch($_GET("opc")){
        case "GetAll":
            $datos=$objCategoria->get_categoria();
            echo json_encode($datos);

        break;

        case "Getid":
            $datos=$objCategoria->get_categoria_por_id($body["cat_id"]);
            echo json_encode($datos);

        break;
        case "Insert":
            $datos=$objCategoria->insertcat($body["nombre"],$body["comentario"]);
            echo json_encode("Insert Correcto");

        break;

        case "Actualizar":
            $datos=$objCategoria->updatecat($body["id"],$body["nombre"],$body["comentario"]);
            echo json_encode("Update Correcto");

        break;

        case "Eliminar":
            $datos=$objCategoria->deletecat($body["estado"]);
            echo json_encode("Delete Correcto, se actualizo su estado");

        break;
    
    }



?>