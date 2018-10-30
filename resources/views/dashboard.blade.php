{{-- load basic site structure --}}
@extends('Layouts.app')

{{-- set page title --}}
@section('page_title', $title)
@show

@section('scripts')
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8eWdnZIExfGK5yG7AgJ0t5IEXWHUqQbs&callback=initMap"
type="text/javascript"></script>
@endsection

{{-- set content of page --}}
@section('content')
  <div id="map"></div>
  <div class="med"></div>
@endsection