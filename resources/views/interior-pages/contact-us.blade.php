@extends('layouts.interior')

@section('page-title', $page_title)
@section('page-subtitle', $page_subtitle)

@section('content')
	<div class="row contact-us-page">
		<div class="col-md-6">
			<div>
				<hgroup>
					<h3>Did someone leave a card on your car?</h3>
				</hgroup>
				<article>
					<p>
						Did someone consider you a terrible parker? Did they leave one of our branded You Cant Park cards on your windshield? How can we help you? <span clas="fa fa-smile-o"></span>
					</p>
				</article>
			</div>
			<div>
				<hgroup>
					<h3>Is there a hard parked car within your midst?</h3>
				</hgroup>
				<article>
					<p>
						Yes? Would you like to get your point across that they are taking up two parking spaces? How about a customized message instead of one of ours?
					</p>
				</article>
			</div>
		</div>
		<div class="col-md-6">
			<form>
				<div class="form-group">
					<label>What's your name?</label>
					<input type="text" class="form-control" placeholder="What can we call you?">
				</div>
				<div class="form-group">
					<label>What's your email adddress</label>
					<input type="text" class="form-control" placeholder="yourname@whereever.com">
				</div>
				<div class="form-group">
					<label>What's on your mind?</label>
					<textarea class="form-control" placeholder="Don't be shy! Tell us :D"></textarea>
				</div>
				<div class="form-group">
					<a href="#" class="btn btn-submit" title="Contact us!">Send!</a>
				</div>
			</form>
		</div>
	</div>
@stop