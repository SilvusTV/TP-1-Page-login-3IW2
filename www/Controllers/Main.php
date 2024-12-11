<?php
namespace App\Controllers;

use App\Core\View;

class Main
{
    public function home(): void
    {
        $view = new View("Main/home.php");
        $view->addData("title", "Welcome Page");
        $user = $_SESSION["user"] ?? null;
        if (isset($_SESSION["connected"]) && $_SESSION["connected"] === true) {
            $view->addData("connected", true);
            $view->addData("pseudo", $user["first_name"]." - ".$user["last_name"]);
        } else {
            $view->addData("connected", false);
        }
    }
}