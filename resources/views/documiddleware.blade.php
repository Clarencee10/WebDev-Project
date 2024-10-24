@extends('layout')

@section('content')
    <div class="container">
        <h1>Laravel Middleware Documentation</h1>

        <section>
            <h2> Creating Middleware</h2>
            <p>Middleware can be created using the Artisan command. Below is an example of creating middleware called <code>CheckAge</code> and <code>LogRequests</code>.</p>
            <pre><code>
php artisan make:middleware CheckAge
php artisan make:middleware LogRequests
            </code></pre>
            <p>This command will generate new middleware files in the <code>app/Http/Middleware</code> directory.</p>
        </section>

        <section>
            <h2> Registering Middleware</h2>
            <p>After creating middleware, it must be registered in the <code>app/Http/Kernel.php</code> file. Middleware can be registered globally or applied to specific routes.</p>
            <h3>Global Middleware</h3>
            <pre><code>
protected $middleware = [
    \App\Http\Middleware\LogRequests::class,
];
            </code></pre>
            <p>This registers the <code>LogRequests</code> middleware globally so it applies to all requests.</p>

            <h3>Route Middleware</h3>
            <pre><code>
protected $routeMiddleware = [
    'checkAge' => \App\Http\Middleware\CheckAge::class,
];
            </code></pre>
            <p>The <code>CheckAge</code> middleware is registered for use in specific routes.</p>
        </section>

        <section>
            <h2> Middleware Usage in Routes</h2>
            <p>Middleware can be applied to specific routes or route groups. Here's an example of applying <code>CheckAge</code> middleware to a route group:</p>
            <pre><code>
Route::middleware(['checkAge'])->group(function () {
    Route::get('/restricted-content', function () {
        return view('restricted');
    });
});
            </code></pre>
            <p>If the user does not meet the age requirement, they will be redirected to an "Access Denied" page.</p>
        </section>

        <section>
            <h2> Middleware with Parameters</h2>
            <p>Middleware can also accept parameters. Below is an example of the <code>CheckAge</code> middleware with a minimum age parameter:</p>
            <pre><code>
Route::get('/adults', function () {
    return view('adults');
})->middleware('checkAge:21');
            </code></pre>
            <p>This route checks if the user is at least 21 years old before granting access to the <code>adults</code> page.</p>
        </section>

        <section>
            <h2>Challenges and Learnings</h2>
            <h3>Challenges</h3>
            <ul>
                <li>Understanding how middleware interacts with the request lifecycle.</li>
                <li>Managing middleware parameters effectively.</li>
                <li>Debugging middleware-related issues like improper redirection or missing route bindings.</li>
            </ul>

            <h3>Learnings</h3>
            <ul>
                <li>Middleware is a powerful tool for handling repetitive tasks like authentication and logging.</li>
                <li>Parameters make middleware flexible and adaptable to various scenarios.</li>
                <li>Efficient use of global and route-specific middleware enhances application performance.</li>
            </ul>
        </section>

        <section>
            <h2>Applied Work</h2>
            <p>You can explore my practical applications of Laravel middleware in my projects. These implementations demonstrate how I've utilized the concepts covered in this documentation:</p>
            <div class="button-container">
                <a href="https://github.com/Clarencee10/WD.git" target="_blank" class="btn btn-primary">Lab4: Implementation of middleware in Laravel</a>
            </div>
        </section>
    </div>
@endsection
