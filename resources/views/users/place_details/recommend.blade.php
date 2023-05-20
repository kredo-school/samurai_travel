{{-- Recommendation: PLACE --}}
<div style="margin-top: 100px">
	<div class="d-flex flex-fluid-row justify-content-center my-5">
		<div class="d-flex justify-content-start me-5"><hr style="width: 80px;"></div>
		<div class="me-5"><h2>Reccomend for you</h2></div>
		<div class="d-flex justify-content-start"><hr style="width: 80px;"></div>
	</div>	
	<div class="row justify-content-center">
		<div class="row">
			<div class="col-3 mb-4">
				<a href="#" class="text-decoration-none text-dark">
					<img src="{{asset('/storage/sample/pexels-satoshi-hirayama-7526797.jpg')}}" alt="..." class="grid-img img-fluid">
					<p>Kyoto</p>
				</a>
			</div>
			<div class="col-3 mb-4">
				<a href="#" class="text-decoration-none text-dark">
					<img src="{{asset('/storage/sample/kyoto-2778629_1920.jpg')}}" alt="..." class="grid-img img-fluid">
					<p>Kamakura</p>
				</a>
			</div>
			<div class="col-3 mb-4">
				<a href="#" class="text-decoration-none text-dark">
					<img src="{{asset('/storage/sample/tomas-malik-orQBzc7Dl3U-unsplash.jpg')}}" alt="..." class="grid-img img-fluid">
					<p>Fuji</p>
				</a>
			</div>
			<div class="col-3 mb-4">
				<a href="#" class="text-decoration-none text-dark">
					<img src="{{asset('/storage/sample/pexels-satoshi-hirayama-7526797.jpg')}}" alt="..." class="grid-img img-fluid">
					<p>Nara</p>
				</a>
			</div>
		</div>
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

