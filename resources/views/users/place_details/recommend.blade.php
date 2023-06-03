{{-- Recommendation: PLACE --}}
<div style="margin-top: 100px">
	<div class="d-flex flex-fluid-row justify-content-center my-5">
		<div class="d-flex justify-content-start me-5"><hr style="width: 80px;"></div>
		<div class="me-5"><h2>Reccomend for you</h2></div>
		<div class="d-flex justify-content-start"><hr style="width: 80px;"></div>
	</div>	
	<div class="row justify-content-center">
		@foreach ($recommend_places as $recommend_place)
			<div class="col-3 mb-4">
				<a href="#" class="text-decoration-none text-dark">
					<img src="{{asset('/storage/sample/' . $recommend_place->image)}}" alt="{{$recommend_place->name_en}}" class="grid-img img-fluid" style="object-fit: cover;">
					<p>{{$recommend_place->name_en}}</p>
				</a>
			</div>
		@endforeach
	</div>
</div>

{{-- Recommendation: PLAN --}}
<div class="row">
	<div class="d-flex flex-fluid-row justify-content-center">
		<div class="me-3" style="width: 32%;">
			@include('users.place_details.recommendation.plan')
		</div>
		<div class="me-3" style="width: 32%;">
			@include('users.place_details.recommendation.plan')
		</div>
		<div class="me-3" style="width: 32%;">
			@include('users.place_details.recommendation.plan')
		</div>
	</div>
</div>

