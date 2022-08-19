<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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