@extends('layout')

@section('content')

    <div class="container">
        <h1>Laravel Layout Documentation</h1>

        <section>
    <h2>Layout and Its Purpose</h2>
    <p>
        The layout file serves as the core template for all views within a Laravel application. 
        By utilizing Laravel’s Blade templating engine, individual view files can inherit this layout structure through the use of directives like <code>extends</code> for inheritance and <code>section</code> for defining specific content. 
        The layout itself typically includes the following elements:
    </p>
    <ul>
        <li><strong>Head Section:</strong> This section includes essential metadata, CSS stylesheets, and asset links (like Bootstrap), with a dynamic title managed by <code>yield('title')</code>.</li>
        <li><strong>Header:</strong> A navigation bar that provides links to various pages, including Home, About, Coffees, Inventory, and Contact.</li>
        <li><strong>Main Content Area:</strong> This area employs <code>yield('content')</code> to display view-specific content.</li>
        <li><strong>Footer:</strong> A static section that presents contact information and links to social media accounts.</li>
    </ul>
</section>

<section>
    <h2>How Views Extend the Layout</h2>
    <p>To build upon the layout, each view file employs the <code>extends</code> directive to inherit the layout's structure and uses <code>section</code> to define its own unique content. Some examples include:</p>
    <ul>
        <li><strong>Home View (<code>home.blade.php</code>):</strong> Inherits the layout while providing a welcoming message and highlighted sections.</li>
        <li><strong>About View (<code>about.blade.php</code>):</strong> Details the website’s story and mission.</li>
        <li><strong>Coffees View (<code>coffees.blade.php</code>):</strong> Showcases various coffee products, complete with descriptions and images.</li>
        <li><strong>Inventory View (<code>inventory.blade.php</code>):</strong> Lists products and offers stock management features.</li>
        <li><strong>Contact View (<code>contact.blade.php</code>):</strong> Displays contact information along with a form for user inquiries.</li>
    </ul>
</section>


<section>
    <h2>Routing Setup</h2>
    <p>The routes for serving these views are defined using <code>Route::get()</code>, mapping URLs to specific view files. Below are examples of the routing setup:</p>
    <ul>
        <li>
            <strong>Home Route (<code>/</code>):</strong>
            <pre><code>
Route::get('/', function () {
    return view('home');
})->name('home');
            </code></pre>
            <p>This serves the <code>home.blade.php</code> view when the root URL is accessed.</p>
        </li>
        <li>
            <strong>About Route (<code>/about</code>):</strong>
            <pre><code>
Route::get('about', function () {
    return view('about');
})->name('about');
            </code></pre>
            <p>Serves the <code>about.blade.php</code> view for the <code>/about</code> URL.</p>
        </li>
    </ul>
</section>

<section>
    <h2>More Routing Examples</h2>
    <ul>
        <li>
            <strong>Coffees Route (<code>/coffees</code>):</strong>
            <pre><code>
Route::get('coffees', function () {
    return view('coffees');
})->name('coffees');
            </code></pre>
            <p>Displays the <code>coffees.blade.php</code> view at the <code>/coffees</code> URL.</p>
        </li>
        <li>
            <strong>Inventory Route (<code>/inventory</code>):</strong>
            <pre><code>
Route::get('inventory', function () {
    return view('inventory');
})->name('inventory');
            </code></pre>
            <p>Shows the <code>inventory.blade.php</code> view at the <code>/inventory</code> URL.</p>
        </li>
        <li>
            <strong>Contact Route (<code>/contact</code>):</strong>
            <pre><code>
Route::get('contact', function () {
    return view('contact');
})->name('contact');
            </code></pre>
            <p>Serves the <code>contact.blade.php</code> view at the <code>/contact</code> URL.</p>
        </li>
    </ul>
</section>


        <section>
            <h2>Challenges Faced and How They Were Resolved</h2>
            <h3>Challenges</h3>
            <ul>
                <li>Handling "View Not Found" errors due to incorrect naming or directory issues.</li>
                <li>Resolving DB connection errors by adjusting the <code>.env</code> file and clearing cache with <code>php artisan config:cache</code>.</li>
            </ul>

            <h3>Learnings</h3>
            <ul>
                <li>Consistency in layout design helps create a unified user experience.</li>
                <li>Using dynamic routing with parameters to create interactive web pages.</li>
            </ul>
        </section>
    </div>

    <section>
            <h2>Applied Work</h2>
            <p>You can explore my practical applications of Laravel layout in my projects. These implementations demonstrate how I've utilized the concepts covered in this documentation:</p>
            <div class="button-container">
                <a href="https://github.com/Clarencee10/WebDevv.git" target="_blank" class="btn btn-primary">Lab3: Implementation of layout in Laravel</a>
            </div>
        </section>

@endsection
