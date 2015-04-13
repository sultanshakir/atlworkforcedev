<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 4/9/15
 * Time: 6:46 PM
 */

namespace controllers;

use core\view;

class Home extends \core\controller {

    public function index() {
        View::rendertemplate('header');
        View::render('welcome/home');
        View::rendertemplate('footer');
    }

    public function about() {
        View::rendertemplate('header');
        View::render('welcome/about');
        View::rendertemplate('footer');
    }

    public function services() {
        View::rendertemplate('header');
        View::render('welcome/services');
        View::rendertemplate('footer');
    }

    public function contact() {
        View::rendertemplate('header');
        View::render('welcome/contact');
        View::rendertemplate('footer');
    }

    public function donate() {
        View::rendertemplate('header');
        View::render('welcome/donate');
        View::rendertemplate('footer');
    }
}