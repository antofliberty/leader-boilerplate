<?php

namespace App\controllers;

use App\models\ExampleModel;
use Exception;
use Leader\Core\Controller;
use Leader\Utils\Templator;

class ExampleController extends Controller
{
    private string $name = "example";
    private Templator $templator;
    private ExampleModel $model;

    public function __construct(string $currentMethod = "GET", array $availableMethods = ["GET"])
    {
        parent::__construct($this->name, $currentMethod, $availableMethods);
        $this->templator = new Templator();
    }

    public function get()
    {
        try {
            $this->model = $this->loadModelFromPostOrGetRequest(ExampleModel::class);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $this->templator->render($this->getPageFilePath(), $this->model->toAssocArray());
    }

    public function post()
    {
    }
}

