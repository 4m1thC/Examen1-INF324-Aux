<?php
include "conexion.php";
$conn=new conexion();

//GET
if($_SERVER['REQUEST_METHOD']=='GET'){
    
        $query="select * from persona";
        $sql=$conn->prepare($query);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200");
        echo json_encode($sql->fetchAll());
        exit;
    
}

//GET:id
if($_SERVER['REQUEST_METHOD']=='GET'){
    
    $query="select * from persona where ci=:ci";
    $sql=$conn->prepare($query);
    $sql->execute();
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    header("HTTP/1.1 200");
    echo json_encode($sql->fetchAll());
    exit;

}

//POST(Alta)
if($_SERVER['REQUEST_METHOD']=='POST'){
        $query="insert into persona(ci,nombre_completo, fecha_nacimiento,departamento) VALUES (:ci,:nombre_completo, :fecha_nacimiento,:departamento); ";
        $sql=$conn->prepare($query);
        $sql->bindValue(':ci',$_POST['ci']);
        $sql->bindValue(':nombre_completo',$_POST['nombre_completo']);
        $sql->bindValue(':fecha_nacimiento',$_POST['fecha_nacimiento']);
        $sql->bindValue(':departamento',$_POST['departamento']);

        $sql->execute();
        $ci=$conn->lastInsertId();
        if($ci){
            header("HTTP/1.1 200");
            echo json_encode($ci);
            echo "resgistro existente";
            exit;
        }
}

//PUT(Cambio)
if($_SERVER['REQUEST_METHOD']=='PUT'){
    $query="update persona set nombre_completo=:nombre_completo, fecha_nacimiento=:fecha_nacimiento, departamento=:departamento where ci =:ci";
    
    $sql=$conn->prepare($query);
    $sql->bindValue(':nombre_completo',$_GET['nombre_completo']);
    $sql->bindValue(':fecha_nacimiento',$_GET['fecha_nacimiento']);
    $sql->bindValue(':departamento',$_GET['departamento']);
    $sql->bindValue(':ci',$_GET['ci']);
    $sql->execute();
    header("HTTP/1.1 200");
    echo "registro actualizado";
}

//DELETE(BAJA)
if($_SERVER['REQUEST_METHOD']=='DELETE'){
    $query="delete from persona where ci=:ci ;";
    $sql=$conn->prepare($query);
    $sql->bindValue(':ci',$_GET['ci']);
    $sql->execute();
    header("HTTP/1.1 200");
    echo "resgistro eliminado exitosamente";
    exit;
}
header("HTTP/1.1 400")

?>