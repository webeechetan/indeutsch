@extends('frontend.layouts.app')
@section('content')
    <!-- Hero Section -->
	<!---  Our Initiatives --->

	<section class="sec-space pt-4">
        <div class="container">
			<div class="row mb-3">
				<div class="col-12">
			    	<div class="init-banner">
				  	<figure class="mb-4">
			            	<img src="{{ asset('frontend') }}/assets/images/initiatives_inner.jpg" alt="Initiatives Banner">
			        </figure>
					</div>
				</div>
				<div class="col-12">
			    	<h3>Green Initiatives</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 pe-lg-4">
                     <div class="init_left-side">
						<div class="init_left-side-content">
							
						      <p>Our Commitment to a Sustainable Future & your partner in sustainability</p>
							  <h5>Introduction</h5>
							   <p> At Indeutsch Industries Private limited, we believe in building a betterworld through sustainable practices. Our dedication to sustainability is integrated into every aspect of our business.</p>
							   <h5>Key Areas of Focus</h5>
							   <ul>
								 <li>
									<b>Energy Efficiency:</b> We use green energy sources (PNG) and have reduced our carbon footprint by 30% over the past five years.
								 </li>
								 <li>
								 <b>Waste Reduction:</b> Our zero-waste initiatives have diverted 85% of our waste from landfills.
								 </li>
								 <li>
								<b>Sustainable Sourcing:</b> We source our wood from sustainable forests FSC-STD-40-003 V2-1; FSC-STD-40-004 V3-1; FSC-STD-50-001 V2-1 EN.
								 </li>
								 <li>
								  <b>Safety:</b> Our all products are CPSIA REACH ASTM D-4236 and EN-71- Part 3(Toy Safety Compliant)
								 </li>
							   </ul>
							   <h5>Impact Metrics</h5>
							   <ul>
								 <li>In the past year, we have saved approx. 1 million gallons of water through innovative recycling processes.</li>
								 <li>
								 Our PNG installations generate 50% of our energy needs, cutting down on fossil fuel use.
								 </li>
							   </ul>
							   <h5>Certifications and Partnerships</h5>
							   <p>We are proud to be certified by TUV SUD, TUV RHEINLAND & TUV INDIA and partners with “globalized campaign welfare society” (NGO), demonstrating our commitment to verified sustainable practices.</p>
							   <h5>Future Goals</h5>
							   <p>By 2035, we aim to be completely carbon neutral, and we are on track to achieve this goal through continuous innovation and improvement.</p>
						</div>
					 </div>
				</div>
				<div class="col-md-4">
                   <div class="init_right-side-content">
					  <h5 class='mt-0'>Recent Initiatives</h5>
					    <ul class='list-unstyled'>
					    	<li class="d-flex gap-1 align-items-center"><span class='bx bx-chevrons-right text-accent'></span><a href="#">Green Initiatives</a></li>
							<li class="d-flex gap-1 align-items-center"><span class='bx bx-chevrons-right text-accent'></span><a href="#">Corporate Social Responsibilities</a></li>
							
						</ul>
				   </div>
				</div>
			</div>
		</div>
	</section>

@endsection