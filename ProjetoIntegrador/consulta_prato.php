<?php
    include_once './pratoCRUD.php';
    function listaPrato(){
      return getPrato();
    }
    function listaPratoByTipo($id){
      return getPratoByTipo($id);
    }
