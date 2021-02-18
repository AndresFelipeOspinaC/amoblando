<?php
require_once ('modelojson.php');

class Controllerjson{

    public function createUsuarioController($document,$id_roll, $username, $lastname, $id_roll, $gender, $email, $phone, $address, $document_type, $password, $confirm_password){
        $datosController = array("document_type"=>$document_type,
        "document"=>$document,
        "id_roll"=>$id_roll,
        "username"=>$username,
        "lastname"=>$lastname,
        "gender"=>$gender,
        "email"=>$email,
        "phone"=>$phone,
        "address"=>$address,
        "document_type"=>$document_type,
        "password"=>$password,
        "confirm_password"=>$confirm_password,

        $respuesta = Datos::createUsuarioModel($datosController,"usuario");
        return $respuesta;
    }

    public function readUsuarioController($email){
        $respuesta = Datos::readUsuarioModel($email,"usuario");
        return $respuesta;
    }

    public function updateUsuariosController($document_type,$document,$Primer_Nombre,$Segundo_Nombre,
    $Primer_Apellido,$Segundo_Apellido,$fecha_nacimiento,$Telefono,$email,$password,
    $confirmar_password,$ID_Genero,$ID_Ciudad,$direccion,$observaciones)
    {
    $datosController = array("document_type" => $document_type,"document"=>$document,
    "Primer_Nombre"=>$Primer_Nombre,"Segundo_Nombre" =>$Segundo_Nombre,
    "Primer_Apellido" =>$Primer_Apellido,"Segundo_Apellido"=>$Segundo_Apellido,
    "fecha_nacimiento" =>$fecha_nacimiento,"Telefono" =>$Telefono,"email"=>$email,
    "password" =>$password,"confirmar_password"=>$confirmar_password,"ID_Genero"=>$ID_Genero,
    "ID_Ciudad" =>$ID_Ciudad,"direccion" =>$direccion,"observaciones"=>$observaciones);
    $respuesta= Datos::updateUsuarioModel($datosController,"usuario");
    return $respuesta;
    }

   public function updateUsuarioAdminiController($document,$Primer_Nombre,$Segundo_Nombre,$Primer_Apellido,
   $Segundo_Apellido,$fecha_nacimiento,$Telefono,$email,$ID_Genero,$ID_Ciudad,$direccion,$observaciones)
   {

    $datosController = array("document"=>$document,
    "Primer_Nombre"=>$Primer_Nombre,"Segundo_Nombre" =>$Segundo_Nombre,
    "Primer_Apellido" =>$Primer_Apellido,"Segundo_Apellido"=>$Segundo_Apellido,
    "fecha_nacimiento" =>$fecha_nacimiento,"Telefono" =>$Telefono,"email"=>$email,
    "ID_Genero"=>$ID_Genero,"ID_Ciudad" =>$ID_Ciudad,"direccion" =>$direccion,"observaciones"=>$observaciones);
    $respuesta= Datos::updateUsuarioAdminModel($datosController,"usuario");
    return $respuesta;

   }
    public function deleteUsuarioController($document,$document_type){
        $respuesta = Datos::deleteUsuarioModel($document,$document_type, "usuario");
        return $respuesta;
    }
    public function loginUsuarioController($email, $password){
        $datosController = array("email"=>$email, "password"=>$password);
        $respuesta = Datos::loginUsuarioModel($datosController, "usuario");
        return $respuesta;
    }
    public function mostrarcontrasenaController($email,$document){
        $respuesta = Datos::mostrarcontrasenaModel($email,$document,"usuario");

        return $respuesta;
    }

    public function createProductoController($ID_Producto,$Nombre_Producto,$destino,$Imagen_Producto,$Talla,$Color,$Material,$Valor,$Descripcion,$ID_categoria,$ID_clasificacion){

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

        $respuesta = Datos::createProductoModel($datosController,"producto");
        return $respuesta;


    }

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
}
?>
