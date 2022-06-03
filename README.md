# Leader boilerplate

Leader is the simplest MVC framework

## Getting started

Download boilerplate

`git clone https://github.com/antofliberty/leader-boilerplate.git`

Install dependencies

`composer install`

You are ready to start

`cd public`

`php -S 127.0.0.1:8000`

## How it works

1) Entrypoint - `public/index.php`
2) It creates router instance and runs application
3) Router loads controller with the name of route. For example: route `index` will load `IndexController`
4) Controller must implement methods that specified in `index.php`. For example: `IndexController` must implement GET method.
5) Controller can load model if you need it. Just use `loadModelFromPostOrGetRequest` method. Look at `ExampleController.php`
6) Model must be named like this: for `example` route model must be named `ExampleModel.php`
7) Class `Leader\Utils\Templator` can render your pages.

## File structure

`/controllers` Your controller classes which extend `Leader\Core\Controller`

`/interfaces` Your interfaces

`/models` Your model classes which extend `Leader\Core\Model`

`/pages` Your templates to render

`/public` Public content

`/services` Your services. Services are classes with static methods. For example look at `Leader\Services\AuthService`

`/traits` Your traits

`/utils` Your utilities. For example: `Leader\Utils\Router` or `Leader\Utils\Templator`


## Implemented classes

You can use it in your project.

`Leader\Utils\Router` Router

`Leader\Utils\Templator` Template engine

`Leader\Utils\DbConnection` DB connection

`Leader\Traits\PdoTrait` Trait for PDO

`Leader\Services\AuthService` Authentication service
