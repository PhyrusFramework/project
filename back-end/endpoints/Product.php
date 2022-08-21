<?php

// EXAMPLE: Endpoints for model Product
CRUD::instance('/api/products')

// ->middleware('default')

// GET /api/products
->list(function($req) {

    // Pagination offset
    $offset = $req->has('offset') ? intval($req->offset) : 0;

    $q = Product::query()
        ->limit(20)
        ->offset($offset);

    $total = $q->count();
    $products = $q->get();

    return ApiResponse::paginate($products, [
        'pageSize' => 20,
        'total' => $total
    ]);

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
    // or
    return ApiResponse::success($product); // wraps answer
})

// GET /api/products/:id
->get(function($req, $params) {

    $product = Product::findID($params->id);
    // or
    $product = Product::findOne('ID = :ID', [
        'ID' => intval($params->id)
    ]);
    // or
    $product = Product::query()
        ->where('ID', intval($params->id))
        ->first();

    if (!$product) {
        // Response 404 Not found
        ApiResponse::notFound();
    }

    return $product;

})

// DELETE /api/produucts/:id
->delete(function($req, $params) {

    $product = Product::findID($params->id);

    if (!$product) {
        // Response 404 Not found
        ApiResponse::notFound();
    }

    $product->delete();

})

// POST /api/products/:id/like
->custom('POST', '/:id/like', function($req, $params) {
    // Do something
})

// Add routes
->generate();