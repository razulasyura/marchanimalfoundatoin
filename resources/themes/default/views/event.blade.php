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
            <div class="upcoming-events bg-white-f3 mb-20">
              <div class="row">
                <div class="col-sm-4 pr-0 pr-sm-15">
                  <div class="thumb p-15">
                    <img class="img-fullwidth" src="{{ Theme::asset('images/img-event-1.jpg') }}" alt="...">
                  </div>
                </div>
                <div class="col-sm-4 pl-0 pl-sm-15">
                  <div class="event-details p-15 mt-20">
                    <h4 class="mt-0 text-uppercase font-weight-500">Event Name</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante Nulla vel metus scelerisque ante.</p>
                    <a href="{{ url('event_detail') }}" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10">Details <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="event-count p-15 mt-15">
                    <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                      <li class="p-15 mr-5 bg-lightest">Dec</li>
                      <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                      <li class="p-15 bg-lightest">2017</li>
                    </ul>
                    <ul>
                      
                      <li><a href="#"><i class="fa fa-map-marker mr-5"></i> Location Event</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="upcoming-events bg-white-f3 mb-20">
              <div class="row">
                <div class="col-sm-4 pr-0 pr-sm-15">
                  <div class="thumb p-15">
                    <img class="img-fullwidth" src="{{ Theme::asset('images/img-event-2.jpg') }}" alt="...">
                  </div>
                </div>
                <div class="col-sm-4 pl-0 pl-sm-15">
                  <div class="event-details p-15 mt-20">
                    <h4 class="mt-0 text-uppercase font-weight-500">Event Name</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante Nulla vel metus scelerisque ante.</p>
                    <a href="{{ url('event_detail') }}" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10">Details <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="event-count p-15 mt-15">
                    <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                      <li class="p-15 mr-5 bg-lightest">Dec</li>
                      <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                      <li class="p-15 bg-lightest">2017</li>
                    </ul>
                    <ul>
                      
                      <li><a href="#"><i class="fa fa-map-marker mr-5"></i> Location Event</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="upcoming-events bg-white-f3 mb-20">
              <div class="row">
                <div class="col-sm-4 pr-0 pr-sm-15">
                  <div class="thumb p-15">
                    <img class="img-fullwidth" src="{{ Theme::asset('images/img-event-3.jpg') }}" alt="...">
                  </div>
                </div>
                <div class="col-sm-4 pl-0 pl-sm-15">
                  <div class="event-details p-15 mt-20">
                    <h4 class="mt-0 text-uppercase font-weight-500">Event Name</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante Nulla vel metus scelerisque ante.</p>
                    <a href="{{ url('event_detail') }}" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10">Details <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="event-count p-15 mt-15">
                    <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                      <li class="p-15 mr-5 bg-lightest">Dec</li>
                      <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                      <li class="p-15 bg-lightest">2017</li>
                    </ul>
                    <ul>
                      
                      <li><a href="#"><i class="fa fa-map-marker mr-5"></i> Location Event</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <nav>
                  <ul class="pagination theme-colored pull-right xs-pull-center mb-xs-40">
                    <li> <a href="{{ url('event_detail') }}" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li> <a href="{{ url('event_detail') }}" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@stop

