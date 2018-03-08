

<!DOCTYPE html>
<html lang="en" ng-app="GitHubApp">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Informações GITHUB</title>
   

  <!-- CORE CSS-->
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
  <!-- Custome CSS-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ URL::asset('css/page-center.css') }}" rel="stylesheet">

</head>

<body class="cyan" ng-controller="GitHubController">
	<div class="row">
		<div class="col s12 z-depth-4 card-panel">
			<div id="login-form">
			    <div class="row" >
			      <div class="input-field col s12 center">
			        <img ng-show="github.avatar_url" ng-src="@{{github.avatar_url}}"  alt=""  class="responsive-img valign profile-image-login">
			      </div>
			    </div>
				<div class="row" >
			        <div class="input-field col s12 center">
					    <ul id="projects-collection" class="collection z-depth-1">
					        <li>
					          <h5  class="collection-header m-5" style="background:#ccffcc; padding:10px; margin:10px; border-radius:2px;">
					          		<b>Olá <span ng-bind="github.nome"></span></b>
					          </h5>
					        </li>
							<li class="collection-item">
							    <div class="row">
								  	<input type="text" id="loginText" style="display:none;" ng-model="loginText" value="{{$user->user['login'] }}"/>
									<div class="input-field col s12">
										<div id="info"><b>Você mora em:</b>
											<div ng-bind="github.localizacao"></div>
										</div>
									</div>
									<div class="input-field col s12">
										<div id="info"><b ng-bind="info">Você trabalha na empresa:</b>
											<div ng-bind="github.empresa"></div>
										</div>
									</div>
									<div class="input-field col s12">
										<div id="info"><b>Sua biografia:</b>
											<div ng-bind="github.bio"></div>
										</div>
									</div>
									<div class="input-field col s12">
										<div id="info"><b>Sua página do GITHUB é:</b>
											<div ng-bind="github.html_url"></div>
										</div>
									</div>
									<div class="input-field col s12">
										<div id="info"><b>Você tem o total de 
											<span ng-bind="github.followers"></span> 
											pessoas te seguindo e está seguindo 
											<span ng-bind="github.following"></span> 
											pessoas com 
											<span ng-bind="github.public_repos"></span> 
											repositórios públicos.</b>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
	<script src="{{ URL::asset('js/AngularControllerShowInfo.js') }}" rel="script"></script>
</body>

</html>