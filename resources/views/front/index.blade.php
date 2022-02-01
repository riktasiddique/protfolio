@extends('layouts.home-app.app')
@section('title', 'Home')
@section('content');
<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>{{$user->name}}</span></h1>
    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio deserunt aspernatur fugiat minus enim ullam repudiandae sint sed magnam tenetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, at.
    </p> -->
    <p>{{$description->description}}</p>
    <a href="{{route('about-page')}}"><button class="btn">about me <i class="fas fa-user"></i></button></a>

    </section>
    <!-- home section ends -->

    <!-- about section starts  -->
@endsection
