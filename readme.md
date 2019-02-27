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


### Testing Databases
TBC