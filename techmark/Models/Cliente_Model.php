<?php

    class ClienteModel{
        private $idUsuario;
        private $nomeUsuario;
        private $emailUsuario;
        private $senhaUsuario;
        private $cpfUsuario;
        private $aniversarioUsuario;
        private $dddUsuario;
        private $telefoneUsuario;
        private $sexoUsuario;
        private $ruaUsuario;
        private $cidadeUsuario;
        private $estadoUsuario;
        private $cepUsuario;
        private $bairroUsuario;
        private $numeroUsuario;
        private $complementoUsuario;

        public function __construct($idUsuario, $nomeUsuario,$emailUsuario, $senhaUsuario, $cpfUsuario, $aniversarioUsuario, $dddUsuario, $telefoneUsuario, $sexoUsuario, $ruaUsuario, $cidadeUsuario, $estadoUsuario, $cepUsuario, $bairroUsuario, $numeroUsuario, $complementoUsuario) {

            $this->idUsuario = $idUsuario;
            $this->nomeUsuario = $nomeUsuario;
            $this->emailUsuario = $emailUsuario;
            $this->senhaUsuario = $senhaUsuario;
            $this->cpfUsuario = $cpfUsuario;
            $this->aniversarioUsuario = $aniversarioUsuario;
            $this->dddUsuario = $dddUsuario;
            $this->telefoneUsuario = $telefoneUsuario;
            $this->sexoUsuario = $sexoUsuario;
            $this->ruaUsuario = $ruaUsuario;
            $this->cidadeUsuario = $cidadeUsuario;
            $this->estadoUsuario = $estadoUsuario;
            $this->cepUsuario = $cepUsuario;
            $this->bairroUsuario = $bairroUsuario;
            $this->numeroUsuario = $numeroUsuario;
            $this->complementoUsuario = $complementoUsuario;
        }
    
    
        public function getIdUsuario() {
            return $this->idUsuario;
        }
    
        public function setIdUsuario($idUsuario) {
            $this->idUsuario = $idUsuario;
        }
    
        public function getNomeUsuario() {
            return $this->nomeUsuario;
        }
    
        public function setNomeUsuario($nomeUsuario) {
            $this->nomeUsuario = $nomeUsuario;
        }

        public function getEmailUsuario() {
            return $this->emailUsuario;
        }
    
        public function setEmailUsuario($emailUsuario) {
            $this->emailUsuario = $emailUsuario;
        }
        
        public function getSenhaUsuario() {
            return $this->senhaUsuario;
        }
    
        public function setSenhaUsuario($senhaUsuario) {
            $this->senhaUsuario = $senhaUsuario;
        }

        public function getCpfUsuario() {
            return $this->cpfUsuario;
        }
    
        public function setCpfUsuario($cpfUsuario) {
            $this->cpfUsuario = $cpfUsuario;
        }

        public function getAniversarioUsuario() {
            return $this->aniversarioUsuario;
        }
    
        public function setAniversarioUsuario($aniversarioUsuario) {
            $this->aniversarioUsuario = $aniversarioUsuario;
        }

        public function getDDDUsuario() {
            return $this->dddUsuario;
        }
    
        public function setDDDUsuario($dddUsuario) {
            $this->dddUsuario = $dddUsuario;
        }

        public function getTelefoneUsuario() {
            return $this->telefoneUsuario;
        }
    
        public function setTelefoneUsuario($telefoneUsuario) {
            $this->telefoneUsuario = $telefoneUsuario;
        }
    
        public function getSexoUsuario() {
            return $this->sexoUsuario;
        }
    
        public function setSexoUsuario($sexoUsuario) {
            $this->sexoUsuario = $sexoUsuario;
        }

        public function getRuaUsuario() {
            return $this->ruaUsuario;
        }
    
        public function setRuaUsuario($ruaUsuario) {
            $this->ruaUsuario = $ruaUsuario;
        }

        public function getCidadeUsuario() {
            return $this->cidadeUsuario;
        }
    
        public function setCidadeUsuario($cidadeUsuario) {
            $this->cidadeUsuario = $cidadeUsuario;
        }

        public function getEstadoUsuario() {
            return $this->estadoUsuario;
        }
    
        public function setEstadoUsuario($estadoUsuario) {
            $this->estadoUsuario = $estadoUsuario;
        }

        public function getCepUsuario() {
            return $this->cepUsuario;
        }
    
        public function setCepUsuario($cepUsuario) {
            $this->cepUsuario = $cepUsuario;
        }

        public function getBairroUsuario() {
            return $this->bairroUsuario;
        }
    
        public function setBairroUsuario($bairroUsuario) {
            $this->bairroUsuario = $bairroUsuario;
        }
    
        public function getNumeroUsuario() {
            return $this->numeroUsuario;
        }
    
        public function setNumeroUsuario($numeroUsuario) {
            $this->numeroUsuario = $numeroUsuario;
        }

        public function getComplementoUsuario() {
            return $this->complementoUsuario;
        }
    
        public function setComplementoUsuario($complementoUsuario) {
            $this->complementoUsuario = $complementoUsuario;
        }
    
    }

?>