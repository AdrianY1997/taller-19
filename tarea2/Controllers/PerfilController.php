<?php

class PerfilController {

    public function ver() {
        render("Views/perfil/ver.html");
    }

    public function editar() {
        render("Views/perfil/editar.html");
    }
}