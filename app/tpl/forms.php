
	
			<div class="text-left page">

			<section class="section breadcrumb-wrapper">
				<div class="shell">
					<h1>Forms</h1>
					<ol class="breadcrumb-custom">
						<li><a href="index.html">Home</a></li>
						<li><a href="forms.html#">Pages</a></li>
						<li><a href="forms.html#">Elements</a></li>
						<li class="active">Forms
						</li>
					</ol>
				</div>
			</section>
			<!-- Login Form Section-->
			<section class="section section-lg bg-white text-center">
				<div class="shell">
					<h2>Login Form</h2>
					<div class="range range-sm range-xs-center">
						<div class="cell-sm-8 cell-md-6 cell-lg-4">
							<!-- RD Mailform-->
							<form class="rd-mailform text-left">
								<div class="form-wrap form-wrap-validation">
									<label class="form-label form-label-outside" for="forms-login-name">Username</label>
									<input class="form-input" id="forms-login-name" type="text" name="name" data-constraints="@Required">
								</div>
								<div class="form-wrap form-wrap-validation">
									<label class="form-label form-label-outside" for="forms-login-password">Password</label>
									<input class="form-input" id="forms-login-password" type="password" name="password" data-constraints="@Required">
								</div>
								<ul class="group-md group-middle">
									<li>
										<button class="button button-primary" type="submit">Sign In</button>
									</li>
									<li>
										<ul class="group-sm">
											<li><a class="icon icon-md icon-circle icon-default fa-facebook" href="forms.html#"></a></li>
											<li><a class="icon icon-md icon-circle icon-default fa-twitter" href="forms.html#"></a></li>
										</ul>
									</li>
								</ul>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- Contact Form Section-->
			<section class="section section-lg bg-white text-center">
				<div class="shell">
					<h2>Contact Form</h2>
					<div class="range range-sm range-xs-center">
						<div class="cell-sm-10 cell-lg-8">
							<!-- RD Mailform-->
							<form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://livedemo00.template-help.com/wt_62461/bat/rd-mailform.php">
								<div class="range range-xs-center range-15">
									<div class="cell-sm-6">
										<div class="form-wrap form-wrap-validation">
											<label class="form-label form-label-outside" for="forms-name">First name</label>
											<input class="form-input" id="forms-name" type="text" name="name" data-constraints="@Required">
										</div>
									</div>
									<div class="cell-sm-6">
										<div class="form-wrap form-wrap-validation">
											<label class="form-label form-label-outside" for="forms-last-name">Last name</label>
											<input class="form-input" id="forms-last-name" type="text" name="last-name" data-constraints="@Required">
										</div>
									</div>
									<div class="cell-sm-6">
										<div class="form-wrap form-wrap-validation">
											<label class="form-label form-label-outside" for="forms-phone">Phone</label>
											<input class="form-input" id="forms-phone" type="text" name="phone" data-constraints="@Numeric @Required">
										</div>
									</div>
									<div class="cell-sm-6">
										<div class="form-wrap form-wrap-validation">
											<label class="form-label form-label-outside" for="forms-email">E-mail</label>
											<input class="form-input" id="forms-email" type="email" name="email" data-constraints="@Email @Required">
										</div>
									</div>
									<div class="cell-sm-12">
										<div class="form-wrap form-wrap-validation">
											<label class="form-label form-label-outside" for="forms-message">Message</label>
											<textarea class="form-input" id="forms-message" name="message" data-constraints="@Required"></textarea>
										</div>
									</div>
								</div>
								<div class="form-button">
									<button class="button button-primary" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- Contact Form with reCaptcha Section-->
			<section class="section section-lg bg-white text-center">
				<div class="shell">
					<h2>Contact Form with reCaptcha</h2>
					<div class="range range-xs-center">
						<div class="cell-sm-10 cell-lg-8">
							<!-- RD Mailform-->
							<form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://livedemo00.template-help.com/wt_62461/bat/rd-mailform.php">
								<div class="range range-xs-center range-15">
									<div class="cell-sm-6">
										<div class="form-wrap form-wrap-validation">
											<label class="form-label form-label-outside" for="forms-2-name">First name</label>
											<input class="form-input" id="forms-2-name" type="text" name="name" data-constraints="@Required">
										</div>
									</div>
									<div class="cell-sm-6">
										<div class="form-wrap form-wrap-validation">
											<label class="form-label form-label-outside" for="forms-2-last-name">Last name</label>
											<input class="form-input" id="forms-2-last-name" type="text" name="last-name" data-constraints="@Required">
										</div>
									</div>
									<div class="cell-sm-6">
										<div class="form-wrap form-wrap-validation">
											<label class="form-label form-label-outside" for="forms-2-email">E-mail</label>
											<input class="form-input" id="forms-2-email" type="email" name="email" data-constraints="@Email @Required">
										</div>
									</div>
									<div class="cell-sm-6">
										<div class="form-wrap form-wrap-validation">
											<label class="form-label form-label-outside" for="forms-2-phone">Phone</label>
											<input class="form-input" id="forms-2-phone" type="text" name="phone" data-constraints="@Numeric @Required">
										</div>
									</div>
									<div class="cell-sm-12">
										<div class="form-wrap form-wrap-validation">
											<label class="form-label form-label-outside" for="forms-2-message">Message</label>
											<textarea class="form-input" id="forms-2-message" name="message" data-constraints="@Required"></textarea>
										</div>
									</div>
									<div class="cell-md-12">
										<!--Google captcha-->
										<div class="form-wrap text-left form-validation-left">
											<div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
										</div>
									</div>
								</div>
								<div class="form-button form-button-captha">
									<button class="button button-primary" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- Newsletter Section-->
			<section class="section section-lg bg-white text-center">
				<div class="shell">
					<h2>Newsletter</h2>
					<div class="range range-sm range-xs-center text-left">
						<div class="cell-sm-8 cell-lg-6">
							<p>Keep up with our always upcoming news and publications.<br> Enter your e-mail and subscribe to our newsletter.
							</p>
							<!-- Mailchimp-->
							<form class="rd-mailform rd-mailform-inline text-left" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="https://livedemo00.template-help.com/wt_62461/bat/rd-mailform.php">
								<div class="form-wrap form-wrap-validation">
									<label class="form-label form-label-outside" for="forms-newsletter-email-1">E-mail</label>
									<input class="form-input" id="forms-newsletter-email-1" type="email" name="email" data-constraints="@Email @Required">
								</div>
								<button class="button button-primary" type="submit">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- MailChimp Section-->
			<section class="section section-lg bg-white text-center">
				<div class="shell">
					<h2>MailChimp</h2>
					<div class="range range-sm range-xs-center text-left">
						<div class="cell-sm-8 cell-lg-6">
							<p>Sign up to our newsletter and be the first to know about the latest news, special offers, events, and discounts.</p>
							<!-- Mailchimp-->
							<form class="mailchimp-mailform rd-mailform-inline text-left" data-form-output="form-output-global" action="https://templatemonster.us15.list-manage.com/subscribe/post?u=ba5bb362073a413f48e4a7b90&amp;id=8dc95d9dec" method="post">
								<div class="form-wrap">
									<label class="form-label form-label-outside" for="inline-email">Enter your e-mail</label>
									<input class="form-input" id="inline-email" type="email" name="email" data-constraints="@Email @Required">
								</div>
								<button class="button button-primary" type="submit">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- Campaign Monitor Section-->
			<section class="section section-lg bg-white text-center">
				<div class="shell">
					<h2>Campaign Monitor</h2>
					<div class="range range-sm range-xs-center text-left">
						<div class="cell-sm-8 cell-lg-6">
							<p>Sign up to our newsletter and be the first to know about the latest news, special offers, events, and discounts.</p>
							<!-- Campaign Monitor-->
							<form class="campaign-mailform rd-mailform-inline text-left" data-form-output="form-output-global" action="http://templatemonster1.createsend.com/t/d/s/xlyhhk/" method="post">
								<div class="form-wrap">
									<label class="form-label form-label-outside" for="campaign-email">Enter your e-mail</label>
									<input class="form-input" id="campaign-email" type="email" name="cm-xlyhhk-xlyhhk" data-constraints="@Email @Required">
								</div>
								<button class="button button-primary" type="submit">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- Page Footer-->
		
		</div>
	