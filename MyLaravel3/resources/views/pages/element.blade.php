@extends('layouts.main-layout')


  @section('elementDescription')


    <section class='description_section'>

      <div class="divider"></div>
      <div class="inner_container_element">

        <div class="cover_detail">
          <img src="{{ $oneElem['thumb'] }}" alt="">
        </div>

        <div class="details">

          <div class="info">

            <h3>
              {{ $oneElem['title'] }}
            </h3>

            <div class="availabillity">

              <div class="priceDetails">
                <p>
                  U.S. Price: $19.99
                </p>

                <p>
                  AVAILABLE
                </p>
              </div>

              <div class="check">
                <p>
                  Check Availability
                </p>
              </div>

            </div>

            <p>
              {{ $oneElem['description'] }}
            </p>
          </div>

          <div class="advertisement">

            <h5>
              ADVERTISEMENT
            </h5>


            <div class="commercial">
              <img src="{{ asset('storage/assets/adv.jpg') }}" alt="">
            </div>

          </div>

        </div>


      </div>

    </section>

    <section class='moreDetails'>
      <div class="inner_container_element">

        <div class="talent">

          <div class="">
            <h4>
              TALENT
            </h4>
          </div>

          <div class="ArtBy">
            <div class="artBy_left">
              Art by:
            </div>
            <div class="">
              @foreach ($oneElem['artists'] as $artist)
                <span>

                  @if ($loop->last)

                    {{ $artist }}
                  @elseif(!$loop->last)
                    {{ $artist }},

                  @endif
                </span>
              @endforeach
            </div>
          </div>

          <div class="writers">
            <div class="writer_left">
              Written by:
            </div>

            <div class="">
              @foreach ($oneElem['writers'] as $writer)
                <span>

                  @if ($loop->last)

                    {{ $writer }}
                  @elseif(!$loop->last)
                    {{ $writer }},

                  @endif
                </span>
              @endforeach
            </div>
          </div>

        </div>

        <div class="specs">
          <div class="">

            <h4>
              Specs
            </h4>

          </div>

          <div class="serie">
            <div class="serie_left">
              Series:
            </div>

            <div class="serie_details">
              {{ $oneElem['series'] }}
            </div>
          </div>

          <div class="price_details">
            <div class="price_left">
              U.S Price:
            </div>

            <div class="">
              {{ $oneElem['price'] }}
            </div>
          </div>

          <div class="onSale">
            <div class="sale_left">
              On Sale Date:
            </div>

            <div class="">
              {{ $oneElem['sale_date'] }}
            </div>
          </div>

        </div>

      </div>
    </section>


  @endsection
