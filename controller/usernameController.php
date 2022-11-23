<?php
    class usernameController{
        private $model;
        
        public function __construct()
        {
            require_once('../../model/usernameModel.php');
            $this->model = new usernameModel();
        }

        public function guardar($nombre){
            $id = $this->model->insertar($nombre);
            return ($id != false) ? header("location:show.php?id=".$id) : header("Location:create.php");
        }

        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }

        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
    }
    
?>