<?php
session_start();
spl_autoload_register("autoLoader");
function autoLoader(string $class){
    $pathClass = "../".str_ireplace(["App\\", "\\"], ["","/"], $class).".php";
    if(file_exists($pathClass)){
        include $pathClass;
    }
}

$uri = strtok(strtolower($_SERVER["REQUEST_URI"]), "?");
$uri = (strlen($uri)>1)?rtrim($uri, "/"):$uri;


if(file_exists("../routes.yml")){
    $listOfRoutes = yaml_parse_file("../routes.yml");
}else{
    throw new Exception("Le fichier de routing n'existe pas");
}

if(empty($listOfRoutes[$uri]) || empty($listOfRoutes[$uri]["controller"]) || empty($listOfRoutes[$uri]["action"])){
    throw new Exception("Page not found : 404");
}
$controller = $listOfRoutes[$uri]["controller"];
$action = $listOfRoutes[$uri]["action"];


if(!file_exists("../Controllers/".$controller.".php")){
    throw new Exception("Le fichier controller n'existe pas : ../Controllers/".$controller.".php");
}
require "../Controllers/".$controller.".php";

$controller = "\\App\\Controllers\\".$controller;
if(!class_exists($controller)){
    throw new Exception("La classe controller n'existe pas : ".$controller);
}
$objetController = new $controller();

if(!method_exists($objetController, $action)){
    throw new Exception("La methode controller n'existe pas : ".$action);
}
$objetController->$action();
