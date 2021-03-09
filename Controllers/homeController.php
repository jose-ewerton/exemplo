<?php

Class homeController extends Controller{ //unico arquivo obrigatorio ter uma funcao chamada index, tbm pela regra criada nas rotas
    public function index()
    {
        $u = new Usuarios();
        $dados = $u->getUsuarios();
        //$dados = [
        //    "nome" => "Ewerton",
        //    "sobrenome" => "Souza",
        //];
        // $nome = "Ewerton"
        //sobrenome = "Souza"
        $this->carregarTemplate('home',$dados);
    }

}

?>