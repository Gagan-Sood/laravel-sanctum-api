# Laravel RESTful API using Sanctum
## About Developer

Created and developed by Gagan Sood.
## About repository

This repository is to create api's using Sanctum library for authentication users. Please check below routes to see how it works:

## Public routes

To get all products listing.
    Method => GET
    Route => /products

To get details of specific product.
    Method => GET
    Route => /products/{product_id}

Search product by its name.
    Method => GET
    Route => /products/search/{product_name}

Create new user.
    Method => POST
    Route => /register
    
Login with user credentials.
    Method => POST
    Route => /login

## Protected routes with Sanctum

To create a new product.
    Method => POST
    Route => /products
    
To update a product.
    Method => PUT
    Route => /products/{product_id}
    
For deleting a product.
    Method => DELETE
    Route => /products/{product_id}
    
Logout User.
    Method => POST
    Route => /logout

## Link to import api's in Postman

https://www.getpostman.com/collections/a3569d0acbd5a0ce98ee
