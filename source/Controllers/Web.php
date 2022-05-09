<?php

namespace Source\Controllers;

/**
 *
 */
class Web extends Controller
{

   /**
    * @param $router
    */
   public function __construct($router)
   {
      parent::__construct($router);
   }

   /**
    * Home route
    *
    * @return void
    */
   public function home(): void
   {
      $head = $this->seo->optimize(
         site("name"),
         site("desc"),
         $this->router->route("web.home"),
         routeImage("Home")
      )->render();

      echo $this->view->render("home", [
         "title" => site('name'),
         "head" => $head
      ]);
   }

   /**
    * Error route
    *
    * @param $data
    * @return void
    */
   public function error($data): void
   {
      $error = filter_var($data["errcode"], FILTER_VALIDATE_INT);

      $head = $this->seo->optimize(
         "Oooppss {$error} | " . site("name"),
         site("desc"),
         $this->router->route("web.error", ["errcode" => $error]),
         routeImage($error)
      )->render();

      echo $this->view->render("error", [
         "head" => $head,
         "error" => $error
      ]);
   }
}