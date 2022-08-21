<?php

// EXAMPLE: Product model using ORM

class Product extends ORM {

    public function Definition($builder) {

        // Define the database table
        $builder->name('products')

        ->column('name')

        ->column('description', 'TEXT')

        ->column('price', 'DECIMAL(12, 4)');

    }

}