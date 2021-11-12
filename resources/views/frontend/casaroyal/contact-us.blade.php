@extends('layouts.layout')

@section('content')

		<!-- Map Section -->
		<div class="casaroyal-section">

			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="casaroyal-custom-maps">
						   	<div id="main-map-
                               ..contact-us"></div>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-md-5">

						<h4>Ouagadougou</h4>

						<p><strong>Address:</strong> Gounghin Secteur 8, Rue 8.38,&nbsp;Ouagadougou</p>
						<p><strong>Téléphone:</strong> +226&nbsp;25 41 64 66</p>
						<p><strong>Email:</strong> <em><a href="mail_to : medias@africconsultinggroup.com" class="__cf_email__" data-cfemail="b9dcd4d8d0d5f9dcc1d8d4c9d5dc97dad6d4">medias@africconsultinggroup.com</a></em></p>

						<h4>Bobo Dioulasso</h4>

						<p><strong>Address:</strong>Secteur 8, Rue 8.38, Bobo Dioulasso, NY 10019</p>
						<p><strong>Téléphone:</strong> +226&nbsp;25 41 64 66</p>
						<p><strong>Email:</strong> <em><a href="mail_to : medias@africconsultinggroup.com" class="__cf_email__" data-cfemail="87e2eae6eeebc7e2ffe6eaf7ebe2a9e4e8ea">medias@africconsultinggroup.com</a></em></p>

					</div>

					<div class="col-md-7">

						<h4>Laissez-nous un message</h4>

						<form action="{{url('nous_contactez')}}" method="post" class="wpcf7-form" novalidate="novalidate">
                            @csrf
							<div class="row">

								<div class="col-sm-6">
								    <span class="your-name">
								    	<input type="text" name="name" value="" size="40" placeholder="Votre nom complet*">
								    </span>
								</div>

								<div class="col-sm-6">
								    <span class="PhoneNumber">
								    	<input type="tel" name="phone" value="" size="40" placeholder="Votre téléphone*">
								    </span>
								</div>

								<div class="col-sm-12">
								    <span class="your-email">
								    	<input type="email" name="email" value="" size="40" placeholder="Votre Email*">
								    </span>
								</div>

								<div class="col-sm-12">
								    <span class="your-message">
								    	<textarea name="message" cols="40" rows="10" placeholder="Votre Message*"></textarea>
								    </span>
								</div>

								<div class="col-sm-12">
									<input type="submit" value="Envoyer">
									<span class="ajax-loader"></span>
								</div>

							</div>

						</form>

					</div>

				</div>

			</div>

		</div>
		<!-- Map Section -->

@endsection
