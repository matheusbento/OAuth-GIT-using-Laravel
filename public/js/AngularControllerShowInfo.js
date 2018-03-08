var app = angular.module("GitHubApp", []);

app.controller("GitHubController", function($scope,GitHubService){
	$scope.github = {};
	$scope.info = "";
	atualizar();
	function atualizar(){

		// capture login by div
		var login = document.querySelector( '#loginText' ).value;
		// just enter in function if the ajax request is done
		GitHubService.atualizar(login).then(function(resposta){
			var infoAtualizadas = resposta.data;
			// set information into scope variable
			$scope.github.bio = infoAtualizadas.bio;
			$scope.github.nome = infoAtualizadas.name;
			$scope.github.html_url = infoAtualizadas.html_url;
			$scope.github.avatar_url = infoAtualizadas.avatar_url;
			$scope.github.followers = infoAtualizadas.followers;
			$scope.github.following = infoAtualizadas.following;
			$scope.github.public_repos = infoAtualizadas.public_repos;
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
		// api to get user information
		return $http.get(api+"/"+login);
	}
});
