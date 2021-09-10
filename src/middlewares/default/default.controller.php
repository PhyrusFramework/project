<?php

class DefaultMiddleware extends Middleware {

    public function display() {

        $this->controller->display();

    }

}