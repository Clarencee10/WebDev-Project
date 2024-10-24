@extends('layout')

@section('content')
    <div class="container">
        <h1>Documentation on Laravel Views</h1>

        <section>
            <h2> Overview of Views</h2>
            <p>In Laravel, views are used to present data to users. These views are created using <code>Blade</code>, which is Laravel's templating engine. Blade offers powerful features that help in generating dynamic HTML content efficiently.</p>
        </section>

        <section>
            <h2> Creating a View</h2>
            <p>To create a new view, you need to add a file with the <code>.blade.php</code> extension inside the <code>resources/views</code> directory. For example, if you want to create a view named "home," you would create a file called <code>home.blade.php</code> in that directory.</p>
            <p>Here’s a simple example of what the content of <code>home.blade.php</code> might look like:</p>
            <pre><code>
&lt;!-- This is the content of resources/views/home.blade.php --&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Home Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome to the Home Page!&lt;/h1&gt;
    &lt;p&gt;This view showcases a simple example using Blade templates.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
            </code></pre>
        </section>

        <section>
            <h2> Returning Views from Controllers</h2>
            <p>When you want to return a view from a controller, you can use the <code>view()</code> helper function. For instance, if you have a method called <code>index()</code> in your controller, you can return the "home" view by writing:</p>
            <pre><code>
public function index() {
    return view('home');
}
            </code></pre>
            <p>This line of code will display the <code>home.blade.php</code> view when the <code>index()</code> method is called.</p>
        </section>

        <section>
            <h2> Sending Data to Views</h2>
            <p>You can send data to your views in different ways when returning a view. One method is to use an array. For example, if you want to pass a name to the view, you can do it like this:</p>
            <pre><code>
public function index() {
    $data = ['name' => 'John Doe'];
    return view('home', $data);
}
            </code></pre>
            <p>In this case, the <code>$name</code> variable will be available in the <code>home.blade.php</code> view.</p>

            <p>Alternatively, you can use the <code>compact()</code> method, which is a convenient way to pass variables. Here’s how you would do it:</p>
            <pre><code>
public function index() {
    $name = 'John Doe';
    return view('home', compact('name'));
}
            </code></pre>
            <p>This will achieve the same result, making the <code>$name</code> variable accessible in the view.</p>
        </section>

        <section>
            <h2> Features of Blade Templates</h2>
            <p>Blade provides several features that enhance the way you create views:</p>
            <ul>
                <li><strong>Template Inheritance:</strong> You can define a master layout and then extend it in your individual views. This allows you to maintain a consistent design across your application.</li>
                <pre><code>
&lt;!-- Example of a master layout --&gt;
&lt;html&gt;
&lt;body&gt;
    &lt;header&gt;Header Content&lt;/header&gt;
    &lt;main&gt;
        @yield('content') &lt;!-- This is where the specific content will be inserted from child views --&gt;
    &lt;/main&gt;
    &lt;footer&gt;Footer Content&lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;
                </code></pre>
                <li><strong>Sections:</strong> You can define sections in your views for better organization. This allows you to specify where content should be placed in your master layout.</li>
                <pre><code>
$section('content')
    &lt;p&gt;This is the content section that will be inserted into the master layout.&lt;/p&gt;
$endsection
                </code></pre>
                <li><strong>Components:</strong> Blade enables you to create reusable components for common user interface elements within your application, promoting code reuse and cleanliness.</li>
            </ul>
        </section>

        <section>
            <h2> Challenges and Insights</h2>
            <h3>Challenges</h3>
            <ul>
                <li>Understanding the differences between Blade syntax and standard PHP can be tricky at first.</li>
                <li>Handling complex views that require data from multiple sources can complicate development.</li>
                <li>Keeping views organized and maintainable is essential to avoid clutter.</li>
            </ul>

            <h3>Insights</h3>
            <ul>
                <li>Using Blade syntax significantly improves the readability and maintainability of your views.</li>
                <li>Template inheritance reduces code duplication and helps maintain consistency across views.</li>
                <li>Passing data to views adds flexibility and allows you to create more dynamic applications.</li>
            </ul>
        </section>

        <section>
            <h2>Applied Work</h2>
            <p>You can explore my practical applications of Laravel views in my projects. These implementations demonstrate how I've utilized the concepts covered in this documentation:</p>
            <div class="button-container">
                <a href="https://github.com/Clarencee10/WebDevv.git" target="_blank" class="btn btn-primary">Lab1: Implementation of views in Laravel</a>
            </div>
        </section>
    </div>
@endsection
