@extends('layout') 

@section('content')

    <section id="home" class="home__section">
    <div class="image-container">
            <img src="/images/profile3.jpg" alt="Clarence" class="profile-pic">
        </div>

        <div class="content">
        
            <h1 class="description">
                Welcome, {{ $username}}!
            </h1>
            <div class="textpar">
                <p class="description">
                    My name is Clarence John B. Maneja, a 20-year-old third-year Bachelor of Science in Information Technology student at Bicol University, residing in Puro, Legazpi City. 
                    Throughout my academic journey, I have worked on various laboratory activities that demonstrate my growing expertise in IT concepts, 
                    particularly in areas such as web development, Laravel framework setup, routing, and middleware implementation.
                    As a student-athlete, I have honed essential skills such as time management, discipline, and the ability to handle multiple responsibilities effectively. 
                    This documentation compiles the lab projects I have completed, showcasing my technical skills and understanding of real-world challenges in the tech industry.
                    <br>
                    <a href="{{ route('docuroutes') }}" class="btn btn-primary">Explore My Lab Projects</a>
                </p>
            </div>
        </div>
    </section>

    @endsection 