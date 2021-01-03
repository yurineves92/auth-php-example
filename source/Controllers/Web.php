<?php

namespace Source\Controllers;

class Web extends Controller
{
    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function login(): void
    {
        $head = $this->seo->optimize(
            "Faça o login para continuar | ".site("name"),
            site("description"),
            $this->router->route("web.login"),
            routeImage("Login")
        )->render();

        echo $this->view->render("theme/login", [
            "head" => $head
        ]);
    }

    public function register(): void
    {
        $head = $this->seo->optimize(
            "Crie sua conta | ".site("name"),
            site("description"),
            $this->router->route("web.register"),
            routeImage("Cadastrar")
        )->render();

        $form_user = new \stdClass();
        $form_user->first_name = null;
        $form_user->last_name = null;
        $form_user->email = null;

        echo $this->view->render("theme/register", [
            "head" => $head,
            "user" => $form_user
        ]);
    }

    public function forget(): void
    {
        $head = $this->seo->optimize(
            "Recupere sua senha | ".site("name"),
            site("description"),
            $this->router->route("web.forget"),
            routeImage("Recuperar a senha")
        )->render();

        echo $this->view->render("theme/forget", [
            "head" => $head
        ]);
    }

    public function reset($data): void
    {
        $head = $this->seo->optimize(
            "Crie sua conta |".site("name"),
            site("description"),
            $this->router->route("web.reset"),
            routeImage("Resetar")
        )->render();

        echo $this->view->render("theme/reset", [
            "head" => $head
        ]);
    }

    /**
     * @param $data
     */
    public function error($data): void
    {
        $error = filter_var($data["errcode"], FILTER_VALIDATE_INT);

        $head = $this->seo->optimize(
            "Ooopps {$error} | ".site("name"),
            site("description"),
            $this->router->route("web.error", ["errcode" => $error]),
            routeImage($error)
        )->render();

        echo $this->view->render("theme/error", [
            "head" => $head,
            "error" => $error
        ]);
    }
}