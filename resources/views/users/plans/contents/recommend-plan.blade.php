@foreach($recommended_plans as $key => $recommended)
  <div class="container-out col-3 bg-white shadow mb-4 mx-4 p-1">
    <h4 class="h5 text-capitalize text-center">{{ $recommended->title }}</h4>
    <div class = "bg-light pt-1">
      <ul class="nav nav-pills mb-3" id="plan_id-tab{{ $recommended->id }}" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active h6 day_ones" id="plan_id_day1-tab{{ $recommended->id  }}" data-bs-toggle="pill" data-bs-target="#plan_id_day1-{{ $recommended->id }}" type="button" role="tab" aria-controls="plan_id_day1-{{ $recommended->id  }}" aria-selected="true">Day 1</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link activ h6 " id="plan_id_day2-tab{{ $recommended->id  }}" data-bs-toggle="pill" data-bs-target="#plan_id_day2-{{ $recommended->id  }}" type="button" role="tab" aria-controls="plan_id_day2-{{ $recommended->id  }}" aria-selected="false">Day 2</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link h6" id="plan_id_day3-tab{{ $recommended->id  }}" data-bs-toggle="pill" data-bs-target="#plan_id_day3-{{ $recommended->id  }}" type="button" role="tab" aria-controls="plan_id_day3-{{ $recommended->id  }}" aria-selected="false">Day 3</button>
        </li>
      </ul>
    </div>

    <div class="row">
      <div class="col">
        <div class="container-plan bg-white  pt-1 rounded">
          <div class="my-5">
            <div class="tab-content " id="plan_id-tabContent{{ $recommended->id }}">
              @for ($k = 1; $k <= 3; $k++)
                <div class="tab-pane fade show {{ $k == 1 ? '': 'active'}} }}" id="plan_id_day{{ $k }}-{{ $recommended->id  }}" role="tabpanel" aria-labelledby="plan_id_day{{ $k }}-tab{{ $recommended->id  }}" tabindex="0">
                  <div class="card-body">
                    @php $nextDestinationTime = null; $i = 0; @endphp
                      @foreach($recommended->planDetails as $key => $recoPlanDetails)
                        @if ($k == $recoPlanDetails->day)
                          <div class="float-start"><i class="fa-solid fa-arrow-down-long"></i></div>
                            <div class="bg-plan p-1 mb-1">
                              <div class="p-2 bg-light">
                                @if($i == 0)
                                  <p><i class="fa-regular fa-clock"></i>Start 9:00</p>
                                  @php $nextDestinationTime = strtotime('+' . $recoPlanDetails->place->spend_time . ' minutes', strtotime('9:00')); @endphp
                                @else
                                  <i class="fa-regular fa-clock"></i>
                                  @php
                                  echo date('H:i', $nextDestinationTime);
                                  $nextDestinationTime = strtotime('+' . $recoPlanDetails->place->spend_time . ' minutes', $nextDestinationTime);
                                  @endphp
                                @endif
                                  <p><i class="fa-solid fa-location-dot"></i> {{ $recoPlanDetails->place->name_en }} </p>
                                  <div class="d-flex">
                                @foreach($recoPlanDetails->place->placeImages as $image)
                                  <div class="px-2">
                                  <img src="{{ asset("/storage/sample/$image->image") }}" class="img-xs" alt="{{$image->image}}">
                                  </div>
                                  <p class="place-desc px-2">{{ $image->description }}</p>
                                @endforeach
                              </div>
                              </div>
                            </div>
                          <div>
                          <i class="fa-solid fa-car"></i> 30 min
                          </div>
                            @php  $i++;  @endphp
                    @endif
                  @endforeach
                </div>                  
            </div>
          @endfor
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class=" d-flex justify-content-center p-3 h6">
      <form action="{{ route('show.plan', $recommended->id )}}" method="get">
        @csrf
        <button class="btn btn-md btn-outline-dark rounded-pill h6" > SEE MORE </button>
      </form>
    </div>
  </div>
@endforeach

{{-- 日付の切り替えのため --}}
<script>
  $(document).ready(function(){
      $('.recommended .nav-link').each(function(index, value){
          $(this).trigger('click');
      });
      $('.day_ones').trigger('click');
  });
</script>
