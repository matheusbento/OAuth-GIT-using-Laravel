<script>
	var app = angular.module("GitHubApp", []);

	app.controller("GitHubController", function($scope,GitHubService){
			$scope.github = {};
			$scope.info = "";
			atualizar();
			function atualizar(){
				var login = document.querySelector( '#loginText' ).value;
				console.log("Login -> " + login);
				GitHubService.atualizar(login).then(function(resposta){
					var infoAtualizadas = resposta.data;
					console.log(infoAtualizadas);
					$scope.github.bio = infoAtualizadas.bio;
					$scope.github.nome = infoAtualizadas.name;
					$scope.github.html_url = infoAtualizadas.html_url;
					$scope.github.avatar_url = infoAtualizadas.avatar_url;
					if(infoAtualizadas.company==null){
							$scope.info = "Você ainda não trabalha :(";
						}
					if($scope.github.empresa!=infoAtualizadas.company){
							$scope.info = "Você trabalha na empresa: ";	
					}
					$scope.github.empresa = infoAtualizadas.company;
					$scope.github.localizacao = infoAtualizadas.location;

				});
			}
	});
	app.service("GitHubService", function($http){
			var api = "https://api.github.com/users";
			
			this.atualizar = function(login){
				return $http.get(api+"/"+login);
			}
	});
