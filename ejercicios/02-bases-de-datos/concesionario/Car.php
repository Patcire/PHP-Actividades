<?php

class Car{


    private $marca;
    private $model;

    public function __construct( $marca, $model) {

        $this->marca = $marca;
        $this->model = $model;

    }

    public function insert(){

        $connection = mysqli_connect("db1", "user", "user", "coches");
        $marca = mysqli_real_escape_string($connection, $this->marca);
        $model = mysqli_real_escape_string($connection, $this->model);


        $sql = "insert into coches (marca, modelo) values
                ('$marca',
                 '$model')";

        mysqli_query($connection, $sql);
        mysqli_close($connection);
    }

    public function delete(){

        $connection = mysqli_connect("db1", "user", "user", "coches");
        $sql = "delete from coches where  marca=  ? and model= ? ";
        $prepared = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($prepared, "i", $marca, $model);
        mysqli_stmt_execute($prepared);
        mysqli_stmt_close($prepared);
        mysqli_close($connection);
    }

    public function update(){


        $changedMarca = $_POST['changedMarca'];
        $changedModel = $_POST['changedModel'];
        $connection = mysqli_connect("db1", "user", "user", "coches");
        $sql = "update coches set 
                marca = $changedMarca,
                model = $changedModel,
             marca = ? and model = ?";

        $prepared = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($prepared, "s", $marca, $model);
        mysqli_stmt_execute($prepared);
        mysqli_stmt_close($prepared);
        mysqli_close($connection);
    }



    public function showCarToUpdate(){
        $connection = mysqli_connect("db1", "user", "user", "coches");
        $sql = "select * from coches where  marca = ? and model = ?" ;
        $prepared = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($prepared, "s", $marca, $model);
        mysqli_stmt_execute($prepared);
        $result = mysqli_stmt_get_result($prepared);

        echo "<input>Marca: " . $result["marca"];
        echo "<input>Modelo: " . $result["model"];

        mysqli_stmt_close($prepared);
        mysqli_close($connection);


    }





}