<?php

class DefaultMiddleware extends Middleware {

    public function display($controller = null) {

        $controller->display();

    }

}