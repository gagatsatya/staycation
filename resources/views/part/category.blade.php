<section class="category">
    <div class="row" style="margin-top:50px">
      <h4 class="mb-3">House With Backyard</h4>
      @foreach ($house as $hs)
          <div class="col-3">
            <a href="/detail-house/{{ $hs->slug }}">
            <img src="images/{{ $hs->img_main }}" alt="img" width="260" height="160">
        </a>
        <h6>{{ $hs->name }}</h6>
        <p style="margin-top:-10px">{{ $hs->city }},{{ $hs->country }}</p>
          </div>
      @endforeach
    </div>
    <div class="row" style="margin-top:50px">
      <h4 class="mb-3">Apartment with Kitchen</h4>
      @foreach ($apartment as $hs)
          <div class="col-3">
            <a href="/detail-apartment/{{ $hs->slug }}">
            <img src="images/{{ $hs->img_main }}" alt="img" width="260" height="160">
        </a>
        <h6>{{ $hs->name }}</h6>
        <p style="margin-top:-10px">{{ $hs->city }},{{ $hs->country }}</p>
          </div>
      @endforeach
    </div>
    <div class="row" style="margin-top:50px">
      <h4 class="mb-3">Hotel with living room</h4>
      @foreach ($hotel as $hs)
          <div class="col-3">
            <a href="/detail-hotel/{{ $hs->slug }}">
            <img src="images/{{ $hs->img_main }}" alt="img" width="260" height="160">
        </a>
        <h6>{{ $hs->name }}</h6>
        <p style="margin-top:-10px">{{ $hs->city }},{{ $hs->country }}</p>
          </div>
      @endforeach
    </div>
  </section>