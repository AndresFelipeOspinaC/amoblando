<?php
require_once ('modelojson.php');

class Controllerjson{

//Controladores de los Usuarios

    public function createUsuarioController($document_type,$document,$username, $lastname, $id_roll, $gender, $email, $phone, $address,  $password, $confirm_password){
        $datosController = array("document_type"=>$document_type,
        "document"=>$document,
        "username"=>$username,
        "lastname"=>$lastname,
        "gender"=>$gender,
        "email"=>$email,
        "phone"=>$phone,
        "address"=>$address,
        "id_roll"=>$id_roll,
        "password"=>$password,
        "confirm_password"=>$confirm_password,
        $respuesta = Datos::createUsuarioModel("datosModel"));
        return $respuesta;
    }
    /*
        public function readUsuarioController($email){
            $respuesta = Datos::readUsuarioModel($email,"users");
            return $resesta;
       }/*
        public function updateUsuariosController($document_type,$document,$username,$lastname, $id_roll, $gender, $email, $phone, $address,$password, $confirm_password)
        {
        $datosController = array( "document_type"=>$document_type,
            "document" => $document,
            "username"=>$username,
            "lastname" =>$lastname,
            "id_roll"=>$id_roll,
            "gender"=>$gender,
            "email" =>$email,
            "phone" =>$phone,
            "address"=>$address,
            "password" =>$password,
            "confirm_password"=>$confirm_password);
        $respuesta= Datos::updateUsuarioModel($datosController,"users");
        return $respuesta;
        }
        public function updateUsuarioAdminiController($document,$id_roll, $username, $lastname, $id_roll, $gender, $email, $phone, $address, $document_type, $password, $confirm_password)
       {
           $datosController = array("document" => $document,"id_roll"=>$id_roll,
               "username"=>$username,
               "lastname" =>$lastname,
               "gender"=>$gender,
               "email" =>$email,
               "phone" =>$phone,
               "address"=>$address,
               "document_type"=>$document_type,
               "password" =>$password,
               "confirm_password"=>$confirm_password);
           $respuesta= Datos::updateUsuarioAdminModel($datosController,"users");
        return $respuesta;

       }
        public function deleteUsuarioController($document,$document_type){
            $respuesta = Datos::deleteUsuarioModel($document,$document_type, "users");
            return $respuesta;
        }
        public function loginUsuarioController($email, $password){
            $datosController = array("email"=>$email, "password"=>$password);
            $respuesta = Datos::loginUsuarioModel($datosController, "users");
            return $respuesta;
        }
        public function mostrarcontrasenaController($email,$document){
            $respuesta = Datos::mostrarcontrasenaModel($email,$document,"users");

            return $respuesta;
        }


//Controladores de los PRODUCTOS



    public function updateProductoController($ID_Producto,$Nombre_Producto,$destino,$Imagen_Producto,
  $Talla,$Color,$Material,$Valor,$Descripcion,$ID_categoria,$ID_clasificacion){

    $datosController = array("ID_Producto"=>$ID_Producto,
    "Nombre_Producto"=>$Nombre_Producto,
    "Imagen_Producto"=>$destino,
    "IMG"=> $Imagen_Producto,
    "Talla"=>$Talla,
    "Color"=>$Color,
    "Material"=>$Material,
    "Valor"=>$Valor,
    "Descripcion"=>$Descripcion,
    "ID_categoria"=>$ID_categoria,
    "ID_clasificacion"=>$ID_clasificacion);


    $respuesta = Datos::updateProductoModel($datosController,"producto");

    return $respuesta;
  }
    public function deleteProductoController($ID_Producto){

    $respuesta = Datos::deleteProductoModel($ID_Producto, "producto");
    return $respuesta;

  }
    */

public function createProductoController($id_prd,$prd_name,$descrip,$price,$stock,$id_category,$id_subca){
    $datosController =0;
    $datosController =Array(
            "id_prd"=>$id_prd,
            "prd_name"=>$prd_name,
            "descrip"=>$descrip,
            "price"=>$price,
            "stock"=>$stock,
            "id_category"=>$id_category,
            "id_subca"=>$id_subca,
            $respuesta = Datos::createProductoModel($datosController,"products"));
            return $respuesta;
    }
}
?>
