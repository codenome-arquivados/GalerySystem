<?php

/**
 * Created by PhpStorm.
 * User: Thiago Cunha
 * Date: 10/07/2017
 * Time: 18:22
 */
class Fotos extends model {

    public function getFotos() {
        $array = array();
        $sql = "SELECT * FROM fotos ORDER BY id DESC";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function addFotos() {
        print_r($_FILES);
        if ($this->temArquivo()) {
            $permitidos = $this->tiposDeArquivosPermitidos();
            if (in_array($_FILES['arquivo']['type'], $permitidos)) {
                $nome = $this->gerarNome();
                move_uploaded_file($_FILES['arquivo']['tmp_name'], '/assets/images/galeria/'.$nome);
                $titulo = '';
                if ($this->temTitulo()) $titulo = addslashes($_POST['titulo']);
                $this->adicionaArquivoNoBanco($titulo, $nome);
            }
        }

    }

    public function tiposDeArquivosPermitidos() {
        return array('image/jpeg', 'image/png', 'image/jpg');
    }

    public function gerarNome() {
        return md5(time().rand(0, 999)).'jpg';
    }

    public function temArquivo() {
        return isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name']);
    }

    public function temTitulo() {
        return (isset($_POST[titulo]) && !empty($_POST['titulo']));
    }

    public function adicionaArquivoNoBanco($titulo, $nome) {
        $sql = "INSERT INTO fotos SET titulo = '$titulo', url = '$nome'";
        $this->db->query($sql);
    }


}