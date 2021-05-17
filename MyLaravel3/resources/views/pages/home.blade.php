@extends('layouts.main-layout')

@section('content')
  <main>

    <div class="inner_container">

      <div class="row">

        <div class="current_series">
          <h3>
            CURRENT SERIES
          </h3>
        </div>
        @foreach ($data as $oneComic)

          <div class="card">
            <div class="cover">
              <img src="{{ $oneComic['thumb'] }}" alt="">
            </div>

            <div class="title">
              {{ $oneComic['series'] }}
            </div>
          </div>

        @endforeach
      </div>

      <div class="load_cta">
        <button type="button" name="button">load more</button>
      </div>

    </div>
  </main>

  <section class='infra_section'>
    <div class="inner_container">
      <ul>

        <li>
          <img src="{{ asset('/storage/assets/buy-comics-digital-comics.png') }}" alt="">
          <a href="#">digital comics</a>
        </li>

        <li>
          <img src="{{ asset('/storage/assets/buy-comics-merchandise.png') }}" alt="">
          <a href="#">DC merchandise</a>
        </li>

        <li>
          <img src="{{ asset('/storage/assets/buy-comics-subscriptions.png') }}" alt="">
          <a href="#">subscription</a>
        </li>

        <li>
          <img src="{{ asset('/storage/assets/buy-comics-shop-locator.png') }}" alt="">
          <a href="#">comic shop location</a>
        </li>

        <li>
          <img src="{{ asset('/storage/assets/buy-dc-power-visa.svg') }}" alt="">
          <a href="#">DC power visa</a>
        </li>

      </ul>
    </div>
  </section>
@endsection
