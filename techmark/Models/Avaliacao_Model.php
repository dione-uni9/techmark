<?php

    class AvaliacaoModel
    {
        // $idPedido tem que ser guardado para saber a quem pertence a avaliacao
        private $idAvaliacao;
        private $idPedidoAvaliacao;
        private $nomeAvaliador;
        private $emailAvaliador;
        private $experienciaAvaliacao;
        private $textoAvaliacao;
    
        public function __get($attr){
            return $this->$attr;
        }
    
        public function __set($attr,$value){
            return $this->$attr = $value;
        }
    }

?>