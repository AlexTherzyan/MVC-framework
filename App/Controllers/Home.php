<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15.08.2018
 * Time: 18:57
 */

namespace App\Controllers;

use Core\Controller;
use Core\View;



class Home extends  AppController
{


    public function indexAction()
    {



        try {
            View::render('index.php');
        } catch (\Exception $e) {
        }

    }



}