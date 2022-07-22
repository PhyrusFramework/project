<?php

// Endpoints for model Product
CRUD::instance('/api/products')

// GET /api/products
->list(function($req) {

    $products = Product::find();
    return $products;

})

// POST /api/products
->create(function($req) {

    $req->require('name', 'description', 'price');

    $product = new Product();
    $product->name = $req->name;
    $product->description = $req->description;
    $product->price = $req->price;

    // Insert into DB
    $product->save();

    return $product;
})

// GET /api/products/:id
->get(function($req, $id) {

    $product = Product::findID($id);
    // Or
    $product = Product::findOne('ID = :ID', [
        'ID' => intval($id)
    ]);

    if (!$product) {
        // Response 400 Bad Request
        response_die('bad', [
            'error' => 'Product does not exist'
        ]);
    }

    return $product;

})

// Add routes
->generate();