<?php


class FuncionarioController
{

    public static function getFuncionarios() {
        $funcionarioService = new FuncionarioService();
        $allFuncionarios = $funcionarioService->getFuncionarios();

        return $allFuncionarios;
      }

      public static function getFuncionario($email)
      {
        $user = FuncionarioService::getFuncionario($email);
        return $user;
      }
    
      public static function getNomeFuncionario($email)
      {
        $user = FuncionarioService::getNomeFuncionario($email);
        return $user;
      }
    
      public static function getIdFuncionario($email)
      {
        $user = FuncionarioService::getIdFuncionario($email);
        return $user;
      }

      public static function ehGerente($email)
      {
        $ehGerente = FuncionarioService::getEhGerente($email);
        return $ehGerente;
      }
    
}




?>