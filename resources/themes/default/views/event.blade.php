@extends('layouts.master')

@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ Theme::asset('images/img-breadcrumb.jpg') }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Event</h2>
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

    <!-- Section: event calendar -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            @foreach($event as $row)
            <div class="upcoming-events bg-white-f3 mb-20">
              <div class="row">
                <div class="col-sm-4 pr-0 pr-sm-15">
                  <div class="thumb p-15">
                    <img class="img-fullwidth" src="{{ Theme::asset('images/event/'.$row->file) }}" alt="...">
                  </div>
                </div>
                <div class="col-sm-4 pl-0 pl-sm-15">
                  <div class="event-details p-15 mt-20">
                  <h4 class="mt-0 text-uppercase font-weight-500">@if (Request::segment(1)=='en') {{ $row->name_en }} @else {{ $row->name }} @endif</h4>
                    <p>@if (Request::segment(1)=='en') {{ $row->description_name_en }} @else {{ $row->description_name }} @endif</p>
                    <a href="{{ url(Setting::get('language').'/event/'.$row->id) }}" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10">Details <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="event-count p-15 mt-15">
                    <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                      <li class="p-15 mr-5 bg-lightest">@if (Request::segment(1)=='en') {{ $row->time_en }} @else {{ $row->time }} @endif</li>
                    </ul>
                    <ul>
                      
                      <li><a href="#"><i class="fa fa-map-marker mr-5"></i> {{ $row->location }}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="row">
              <div class="col-sm-12">
                <nav>
                  <ul class="pagination theme-colored pull-right xs-pull-center mb-xs-40">
                    <?php echo $event->render(); ?>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@stop

