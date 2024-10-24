@extends('layout')

@section('content')
    <div class="container">
        <h1>Laravel Routes Documentation</h1>

        <section>
            <h2> Basic Route</h2>
            <p>This type of route returns a view for a specified URL. It is defined using the <code>Route::get()</code> method.</p>
            <pre><code>
Route::get('/', function () {
    return view('homepage');
});
            </code></pre>
            <p>The above code defines a basic route that returns the <code>homepage</code> view when a user accesses the root URL <code>/</code>.</p>
        </section>

        <section>
            <h2> Redirect Route</h2>
            <p>This route redirects one URL to another. It is useful for maintaining URL structures without breaking existing links.</p>
            <pre><code>
Route::redirect('/home', '/');
            </code></pre>
            <p>Here, the URL <code>/home</code> redirects to <code>/</code>, ensuring users land on the homepage.</p>
        </section>

        <section>
            <h2> Route with Parameters</h2>
            <p>Routes can accept parameters, which are used to customize the content displayed on a page.</p>
            <h3>Required Parameters</h3>
            <pre><code>
Route::get('/user/{username}', function ($username) {
    return view('welcomeUser', ['username' => $username]);
});
            </code></pre>
            <p>This route requires a <code>username</code> parameter and displays a personalized welcome message for the user.</p>

            <h3>Optional Parameters</h3>
            <pre><code>
Route::get('/user/{username?}', function ($username = 'Guest') {
    return view('homepage', ['username' => $username]);
});
            </code></pre>
            <p>If a username is not provided, it defaults to <code>Guest</code>.</p>
        </section>

        <section>
            <h2> Named Routes</h2>
            <p>Named routes allow easy generation of URLs or redirects using their name instead of hardcoding URLs.</p>
            <pre><code>
Route::get('/about', function () {
    return view('about');
})->name('about');
            </code></pre>
            <p>This route is named <code>about</code>, making it easy to reference in Blade templates or controllers.</p>
        </section>

        <section>
            <h2> Route Constraints</h2>
            <p>Constraints can be applied to route parameters to ensure they meet specific criteria, like being alphabetic.</p>
            <pre><code>
Route::get('/user/{username}', function ($username) {
    return view('welcomeUser', ['username' => $username]);
})->where('username', '[a-zA-Z]+');
            </code></pre>
            <p>This ensures that the <code>username</code> parameter only contains alphabetic characters.</p>
        </section>

        <section>
            <h2>Challenges and Learnings</h2>
            <h3>Challenges</h3>
            <ul>
                <li>Understanding route syntax and distinguishing between various route types.</li>
                <li>Effectively using named routes and managing route parameters.</li>
                <li>Debugging routing issues like missing views or incorrect parameter handling.</li>
            </ul>
            <h3>Learnings</h3>
            <ul>
                <li>The importance of organizing routes for easier maintainability.</li>
                <li>Utilizing optional and required parameters for dynamic content.</li>
                <li>The power of named routes for cleaner code and easier URL generation.</li>
                <li>Improving debugging skills through the process of resolving routing errors.</li>
            </ul>
        </section>

        <section>
            <h2>Applied Work</h2>
            <p>You can explore my practical applications of Laravel routing in my projects. These implementations demonstrate how I've utilized the concepts covered in this documentation:</p>
            <div class="button-container">
                <a href="https://github.com/Clarencee10/WD.git" target="_blank" class="btn btn-primary">Lab2: Implementation of routing in Laravel</a>
            </div>
        </section>

    </div>
@endsection
