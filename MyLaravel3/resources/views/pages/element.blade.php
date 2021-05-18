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


  @endsection
