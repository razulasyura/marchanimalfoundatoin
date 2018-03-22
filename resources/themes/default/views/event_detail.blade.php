@extends('layouts.master')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ Theme::asset('images/img-event-detail.jpg') }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Event Detail</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-theme-colored">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li>
                <h5>Topics:</h5>
                <p>{{ $event->name }}</p>
              </li>
              <li>
                <h5>Host:</h5>
                <p>{{ $event->host }}</p>
              </li>
              <li>
                <h5>Location:</h5>
                <p>{{ $event->location }}</p>
              </li>
              <li>
                <h5>Date:</h5>
                <p>{{ $event->time }}</p>
              </li>
              {{--  <li>
                <h5>End Date:</h5>
                <p>17 April 2016</p>
              </li>  --}}
              <li>
                <h5>Share:</h5>
                <div class="styled-icons icon-sm icon-gray icon-circled">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-8">
            <img src="{{ Theme::asset('images/img-event-detail.jpg') }}" alt="">
          </div>
        </div>
        <div class="row mt-60">
          <div class="col-md-12">
            <h4 class="mt-0">Event Description</h4>
            <p>{{ $event->description }}</p>
          </div>
          {{--  <div class="col-md-6">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>  --}}
        </div>
      </div>
    </section>

@stop

