# Track List

Track list is twofold, an educational repo to use as discussion points for Laravel and Platform Development, along side a database platform test. For research, we wanted to test the capacity of databases for our specific use case, which is querying an enormous database at a high capacity. This performance test will help determine the best way to achieve the desired results.

### Points of Note
The main benefit to using a framework such as laravel is the seperation of concerns easily available, and easy application of SOLID principles. 
In this repo, examples of routing, models, repositories, validation, and more shows how this can be kept independant. Each segment will be outlined in detail before discussing at length the repository system used for testing database types.

##### Routing
[API Routes file](routes/api.php) - In Laravel, all requests are mapped with the help of routes. Basic routing routes the request to the associated controllers. In the above example, we are looking at API routes. _Within Laravel, you can specify multiple routes files which can handle various requirements of your application._
The API routes file deals with API requests for us. They are stateless requests that use JSON Web Tokens for validation. All routes within this file are encompassed by this.
Within this file I have provided examples or Route groups, resource routes, as well as a standard get route.
> *Route Groups* - [Docs](https://laravel.com/docs/5.7/routing#route-groups) 
Route groups allow you to share route attributes, such as middleware or namespaces, across a large number of routes without needing to define those attributes on each individual route. Shared attributes are specified in an array format as the first parameter to the `Route::group` method.

> *Route Resources* 
Route resources are a neat way to create CRUD methods for a resource. In our example we have a Tracks controller which handles CRUD requests for Tracks. The resource route automatically maps these methods. I've added a search method in the routes file just to show this as an example.

##### Request Models and Validation
Thanks to Reflection, Laravel lets us Type hint in our controllers. We're using this in the Tracks controller to Type hint a specific request `app\Http\Requests\TrackStoreRequest.php` for our Track store repository. This Request Class extends `Illuminate\Foundation\Http\FormRequest` allowing us to define Validation `rules`.
At an overview level, this gives the capability to abstract complex validation to a separate class. This keeps controllers lightweight and slim, and keeps a separation of concerns. This method is very extendable for any type of request to validate.

##### Repositories
In Laravel Repositories are often misused or overrated, but in this scenario there is a use case.
We're wanting to test multiple databases and we'll use repositories to abstract the nuances which how each one works. This allows us to create a Repository Interface to define functionality.
In `App\Repositories\Interfaces\TrackInterface.php`, we define public methods which represent functionality for all Track respositories. For each data repository we implement these methods, with each one retreiving data via a data abstraction layer. For Eloquent Supported databases, this is a [Eloquent model](https://laravel.com/docs/5.7/eloquent).
Using Dependancy Injection we can now use each variety of Track Database, and they are interchangable with each other.


### Testing Databases

##### Overview
In order to discover the best possible database strategy, we are using the aforementioned Track Interface in order to test each type of database. Our goal is to have a system that can recall and search tracks among millions of records at as high capacity as possible.
This database will be used as a hot table for recall only, ensuring it's optimised for reads.

##### Strategy
*Seeding* 
In this repository we will be seeding millions of records into various database systems. One large issue is that Faker, the library that generates a lot of our fake data is memory heavy. In order to combat this we'll use chunking to prevent issues.
A seeder is requried for each database type and are executed by CLI.

[TBC]

### Learning Resources
There's many learning resources for laravel available that are great. _(Because it's so accessible, there's also loads that are a pile of crap)_. Any good ones found we can link in here to make keeping track of them a little easier.

The best place to start is the Laravel Docs. They're informative, easy to follow and contain most of the basics:
[Laravel Official Documentation](https://laravel.com/docs)

Laravel's API Docs are also informative if you need specifics on a class or similar. I don't find myself reaching for it on a day to day basis:
[Laravel API Documentation](https://laravel.com/api/5.8/index.html)

Laravel offers Laracasts, which are more lesson/tutorial format teaching on the platform. Some are free, some are not.
[Laracast Platform](https://laracasts.com/)

In general, there are development principles that it would be good to keep in mind whilst we proceed. I'm personally not one for rigorously and blindly following principles, as often they are _overkill_ or simply destructive in a specific use case. I do think they are useful to think about during development at an overview level to help output more understandable and maintainable systems.

>KISS :white_check_mark:, DRY :white_check_mark:, SOLID :white_check_mark:

Personally, my thoughts are usually focused on creating a seperation of concerns, resusable, modular, uncoupled code. All other principles are nicities or for specific situations.
With that in mind, here's a few articles I've found which typically subscribe to my way of thinking:

Using a Service Layer to separate business logic from the application is a great way to separate concerns. It makes all separate components testable. And keeps code Simple and DRY.
[Design Pattern : Service Layer with Laravel 5](https://m.dotdev.co/design-pattern-service-layer-with-laravel-5-740ff0a7b65f)

Request Validation article describes the idea behind what is used in this repo, and talks about it in greater detail. This is a great way to separate concerns and keeps individual scripts simple.
[The Smart Way To Handle Request Validation In Laravel 😎](https://medium.com/@kamerk22/the-smart-way-to-handle-request-validation-in-laravel-5e8886279271)

Using SOLID Principles in PHP is a great way to rationalise code decisions into something simpler. This article gives the basics, but in a PHP format.
[SOLID Principles in PHP](https://medium.com/prod-io/solid-principles-takeaways-ec0825a07247)



--------------------------------
Thanks
