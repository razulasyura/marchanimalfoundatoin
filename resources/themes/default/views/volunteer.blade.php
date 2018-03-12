@extends('layouts.master')

@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{ Theme::asset('images/img-breadcrumb-2.jpg') }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Volunteer</h2>
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

    <!-- Section: Schedule -->
    <section id="schedule" class="divider parallax layer-overlay overlay-white-8" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-80 pb-60">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-schedule">
                <thead>
                  <tr class="bg-theme-colored">
                    <th>Nama</th>
                    <th>Lokasi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Drh. Ani Siti</td>
                    <td>Sumedang</td>
                  </tr>
                  <tr>
                    <td>Drh. Ahmarining W</td>
                    <td>Sumedang</td>
                  </tr>
                  <tr>
                    <td>Drh. Widia Ilhami</td>
                    <td>Majalengka</td>
                  </tr>
                  <tr>
                    <td>Drh. Arsi Kurniawan</td>
                    <td>Majalengka</td>
                  </tr>
                  <tr>
                    <td>Drh. Kresna Nurdin</td>
                    <td>Majalengka</td>
                  </tr>
                  <tr>
                    <td>Drh. Win</td>
                    <td>Bogor</td>
                  </tr>
                  <tr>
                    <td>Drh. Bernike Anggun D.</td>
                    <td>Klaten</td>
                  </tr>
                  <tr>
                    <td>Drh. Anastascia</td>
                    <td>Klaten</td>
                  </tr>
                  <tr>
                    <td>Drh. Sari</td>
                    <td>Klaten</td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
@stop
