<?php

namespace App\controllers;
use \Leader\Core\Controller;
use \Leader\Utils\Templator;

class IndexController extends Controller
{
    private string $name = "index";
    private Templator $templator;

    public function __construct(string $currentMethod = "GET", array $availableMethods = ["GET"])
    {
        parent::__construct($this->name, $currentMethod, $availableMethods);
        $this->templator = new Templator();
    }

    public function get()
    {
        $this->templator->render($this->getPageFilePath(), [
            "route" => $this->name
        ]);
    }

    public function post()
    {
    }
}
