<section class="bg project-section">
	<div class="container">
		<div class="peojectnameList">
			<ul class="list-project">
				<!-- <li>
					<a href="javascript:void(0);">Home</a>
				</li>
				<li>
					<a href="javascript:void(0);">New Projects in Lucknow</a>
				</li> -->
			</ul>
		</div>
		<div class="projects_list">
			<div class="projectLocation clearfix">
				<div class="project-heading float-left">
					<h2>Projects</h2>
				</div>
				<div class="project-right float-right">
					<button class="btn btn-sm btn-default text-dark">Sort By
	  				<select class = "hovs">
							<option>Relevence</option>
							<option>Price -high to low</option>
							<option>Price -low to high</option>
							<option>Most Recent</option>
						</select>
					</button>
				</div>
			</div>
			@foreach($project as $projects)
				<div class="projectsWrapper">
						<div class="row">
							<div class="col-md-4 pd-right-none">
								<div class="imgProject">
									<a href="{{url('projectproperties')}}/{{___encrypt($projects['id'])}}"><img title="{{$projects['image']}}" src="{{url('assets/img/projects')}}/{{$projects['image']}}" alt="project"></a>
									<span class="bulge">{{count($projects['property'])}} properties</span>
								</div>
							</div>
							<div class="col-md-8">
								<div class="clearfix">
									<div class="project-description float-left">
										<h3 title="{{$projects['name']}}">{{$projects['name']}}</h3>
										<p title="{{$projects['location']}}">{{str_limit($projects['location'],95)}}</p>
										<p title="{{$projects['company']['name']}}"><strong>{{$projects['company']['name']}}</strong></p>
									</div>
									<div class="project-pric float-right">
										<h3><i class="fa fa-rupee"></i>{{number_format($projects['price'])}}</h3>
									</div>
								</div>
								<div class="project-content">
									<p title="{{strip_tags($projects['description'])}}">{{str_limit(strip_tags($projects['description']),280)}}</p>
								</div>
								<ul class="projectContent">
									<li>1 BHK Flat</li>
									<li>1200 - 13850 sqft</li>
									<li><i class="fa fa-rupee"></i>56Lac - 73Lac</li>
									<li><a href="javascript:void(0);" class="btn-blue contactNow">Contact Now</a></li>
								</ul>
								<ul class="projectContent">
									<li>2 BHK Flat</li>
									<li>1350 - 1380 sqft</li>
									<li><i class="fa fa-rupee"></i>56Lac - 73Lac</li>
									<li><a href="javascript:void(0);" class="btn-blue contactNow">Contact Now</a></li>
								</ul>
							</div>
						</div>
				</div>
			@endforeach
		</div>
		<div>
			
		</div>
	</div>
</section>