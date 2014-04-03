<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rbac
 *
 * @author kip
 */
class Rbac {
 
      public function getRole_privileges()
     {
   // $role = new Role();
       $id= Rbac::get_Role();
       $log = $this->rbac_model->get_priv($id['role_id']);
     //  $this->jquery->alert($log);
       
        $this->session->set_userdata('privileges',$log);
      /* echo'wewewe';
     echo '<pre>';
     print_r($log);
     echo '</pre>';*/
    return $log;
 } 
     public  function get_Role()
      {
   // $role = new Role();
         $log = $this->rbac_model->get_role();
      return $log ;
      
      }
}
