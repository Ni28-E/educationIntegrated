@extends('layouts.visitorApp')

@section('content')

    <link rel="stylesheet" href="{{ URL::asset('css/blog.css') }}">

    <div class="container">
        <div class="row justify-content-center">
{{--                displays all blogs using bootstrap cards --}}
                    @foreach($blogs as $blog)
{{--                      check if a blog is accepted  --}}
                            <div class="card col-3 m-1">
                                <div class="card-header">
                                    {{--<a href="{{ route('blogs.show', $blog->id) }}">--}}
                                        <strong>{{ $blog->title }}</strong>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <strong>{{ $blog->content }}</strong>
                                </div>
                                <div class="card-footer">
        {{--                            if you own this blog, display a button for editing and deleting it --}}

                                        {{--<button><a href="{{ route('blogs.edit', $blog->id) }}">Update</a></button>
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Delete</button>
                                        </form> --}}
                                </div>
                            </div>
                    @endforeach

            <div class="row">
                <div class="left-column">
                    <div class="card">

                        <img src="image/focus.jpg"width="500" height="350">
                        <h2>How do I motivate myself as a student?</h2>
                        <br><br>
                        <p> 1. Set yourself realistic goals: Set yourself short-term and long-term goals and reward yourself when you achieve them.</p>
                        <br>
                        <p> 2. Make a plan: take time to make a plan for your studies every day. It will help you stay focused so you can achieve your goals.</p>
                        <br>
                        <p> 3. Energize yourself: Change your study routine regularly and add new elements to make it more interesting.</p>
                        <br>
                        <p> 4. Make study more fun: Look at ways to make your learning more fun, such as gamification or making a study group.</p>
                        <br>
                        <p> 5. Adapt your environment: Make sure your study environment is comfortable and inviting.</p>
                        <br>
                        <p> 6. Stay motivated: Stay motivated by reading books, articles and blogs on your subject to feel inspired.</p>
                        <br>
                        <p> 7. Stay organized: Make sure you are organized and complete your tasks on time.</p>
                        <br>
                        <p> 8. Take enough rest: Take regular rest to distract your mind from your studies and recharge your energy with reading books, articles and blogs on your subject to feel inspired.</p>
                        <br>
                        <p> 9. Stay positive: Stay positive and replace negative thoughts with positive thoughts.</p>
                        <br>
                        <p>  10. Take care of yourself: Get enough sleep, eat healthy, drink enough water and exercise regularly to keep your mind and body healthy and active</p>
                        <br>
                    </div>

                    <div class="card">
                        <img src="image/health.jpg"width="500" height="350">

                        <h2>Mental health</h2>
                        <br>
                        <p>
                            Mental health is an important aspect of our overall well-being and can,
                            if not properly addressed, cause serious issues in both the short and long term.
                            Mental health is an important part of overall health, yet it is often overlooked in society.
                            Mental health is a state of well-being in which an individual can cope with life's everyday challenges, work productively and develop their potential.
                            Mental health problems can range from mild to severe, and can have a great impact on one’s day-to-day life, relationships, and overall functioning.
                            Some of the most common mental health issues include depression, anxiety, bipolar disorder, eating disorders, and post-traumatic stress disorder (PTSD).
                        </p>
                        <br>
                        <p>It is important for students to take care of their mental health as it can have a major impact on their academic performance, relationships, and overall well-being.
                            To maintain mental health, it is important for students to understand the signs and symptoms of mental health issues, such as depression, anxiety, and stress.
                            If a student is feeling overwhelmed or anxious, they should take time to relax and unwind. Taking time for self-care and relaxation can help reduce stress and improve mental health.
                            Additionally, students should seek out support from their friends, family, and healthcare professionals if they are struggling with their mental health.
                            We have a ‘Journaling Exercise’ book to help you through this. You can find this book in our app
                        </p>
                        <br>
                        <p>Treatment for mental health issues can take many different forms, depending on the individual and their specific needs.
                            Treatment options can include psychotherapy, medication, lifestyle changes, and other strategies based on the individual’s needs.
                            It is important to remember that mental health is just as important as physical health, and that taking care of our mental wellbeing is an essential part of living a healthy and fulfilling life.
                        </p>
                        <br>
                        <p>In addition to self-care, students should also practice healthy habits to maintain their mental health. This includes getting regular exercise, eating a balanced diet, and getting enough sleep.
                            Exercise and diet can greatly improve mood and reduce stress, while getting enough sleep helps the body and mind to recharge. It is also important for students to take time to socialize and connect with others.
                            That means also spending time with friends.
                        </p>
                        <br>
                        <p>If you or someone that you know is suffering with their mental health, seek help as soon as possible.
                            There is no shame in seeking help and getting the support and treatment you need to live a happy and healthy life.
                            My Education Lifestyle offers a free consultation for students by making an appointment with one of our coaches in our app.
                        </p>
                        <br>

                    </div>
                </div>


                <div class="right-column">


                    <div class="card">
                        <h3>Popular Post</h3>
                        <br>
                        <h2>Title</h2>
                        <img src="image/update.jpeg"width="300" height="200">
                        <h2>Title</h2>
                        <img src="image/update.jpeg"width="300" height="200">
                        <h2>Title</h2>
                        <img src="image/update.jpeg"width="300" height="200">


                    </div>


                </div>
            </div>




        </div>
        </div>
@endsection
