<section class="sectionDetails">
	<div class ="container-fluid">
		<div class="row">
			<div class="col-md-9 imageDetail">
				<div id="content_s">
					<div class="behind"> </div>
						<img src="{{url('assets/img/properties')}}/{{$property['featured_image']}}" style="width: 100%" alt="">
						<div class="text_s">
							<h2>{{$property['name']}}</h2>
							<p>By <b>{{$property['company']['name']}}</b> • {{$property['location']}} </p>
							<p><b><i class="fa fa-rupee"></i> {{number_format($property['price'])}}</b> onwards • <b>{{$property['bedrooms']}}</b> BHK <b>{{$property['category']['name']}}</b> • Area:</b> {{number_format($property['area'])}} sqft.</p>
							<ul>
								<li> Possession <span>: {{$property['possession']}}</span></li>
							</ul>
							<span class ="marking">Highlights</span>		
							<ul class="mt-4">
								{!!($property['key_points'])!!}
							</ul>
							<button name="" class="btn btn-md">I am interested</button> 	
		       			</div>
					</div>
				</div>	
				<div class="col-md-3 ">
					<div id=" " class="">
						<div class="row">
							<div class="margiN col-md-12">	
								<img src="{{url('assets/img/properties/project-logo.jpg')}}"
									class="sids" alt ="logo">
							</div>
						</div>	
						<div class="row">
							<div class="col-md-12">
								<ul class="item_list">
									<li>Properties Availabale </li>
									<li>Overview</li>
									<li>Amenties </li>
									<li>Specifications </li>
									<li>Gallery </li>
									<li>Map view </li>
									<li>About the Builder </li>
								</ul>
							</div>	
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="detai_l">
									<h6> Want to know more? </h6>
									<input type="text" name="name" placeholder="Enter name " >	
									<input type="email" name="" placeholder = "Enter Email">	
									<input type="text" name="" placeholder= "Mobile ">		
									<button class="btn btn-success "> Connect with Builder</button>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div> 			
</section>

