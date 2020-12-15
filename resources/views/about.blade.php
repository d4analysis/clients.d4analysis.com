@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
             <h3>About Onefolio</h3>
             <p>Onefolio is a digital storeroom for your alternative assets. It may not be unique (what is?) but we've struggled to find
               anything that comes close to what onefolio provides.</p>
               <h4>So, what <i>does</i> it provide?</h4>
               <ul>
                 <li>A single place to store information on private company, property and other alternative investments.</li>
                 <li>One aggregated portfolio view</li>
                 <li>Secure document storage for certificates and other paperwork</li>
                 <li>Latest news and alerts on your investments</li>
                 <li>Tax calculations</li>
                 <li>Indicative valuations based on recent liquidity events</li>
                 <li>Custom portfolios to help you segregate investments</li>
                 <li>...</li>
              </ul>
               <h4>Who needs Onefolio?</h4>
               <p>If you have more than one or two alternative investments then Onefolio could prove very useful in managing
                 your portfolio. Or if you manage investments on behalf of others - as an IFA, or custodian for example. Or if you're
                 interested in tracking a range of investments and receiving timely information on them.
               </p>
               <h4>How much does it cost?</h4>
               <p>Onefolio is free to use up to 10 individual investments. </p>
               <div class="row">
       					<div class="col-sm-12 col-md-6 col-lg-4">
       						<div class="card border-info mb-3">
       								  <div class="card-body text-info">
       									<h5 class="card-title">FREE</h5>
       									<p class="card-text">
                            <ul>
                              <li>Up to 10 individual investments</li>
                              <li>News and alerts</li>
                              </ul>
                        </p><br/>
       								  </div>
       								</div>
       					</div>
       					<div class="col-sm-12 col-md-6 col-lg-4">
       					<div class="card border-dark mb-3">
       								  <div class="card-body text-dark">
       									<h5 class="card-title">Standard</h5>
                        <h6><b>£9.99 per month</b></h6>
       									<p class="card-text">
                            As per FREE, plus:
                            <ul>
                                  <li>Unlimited investments</li>
                                  <li>Custom portfolios</li>
                                  <li>Secure document storage</li>
                                  <li>Tax calculations</li>
                                  <li></li>
                            </ul>

       								  </div>
       								</div>
       					</div>

       					<div class="col-sm-12 col-md-6 col-lg-4">
       								<div class="card border-danger mb-3">
       								  <div class="card-body text-danger">
       									<h5 class="card-title">Premium</h5>
                        <h6><b>£15.99 per month</b></h6>
       									<p class="card-text">
                          As per Standard, plus:
                        <ul>
                          <li>Personal onboarding</li>
                          <li>Monthly portfolio report via email</li>
                          <li></li>
                        </p>
       								  </div>
       								</div>
       					</div>

       				</div>
        </div>
    </div>
</div>
@endsection
