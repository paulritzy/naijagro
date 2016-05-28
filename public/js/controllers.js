var app = angular.module('naijagro',[]);

app.constant('BASE_URL', 'http://localhost/laravel/naijagro/public');

app.config(function() {
    
});


app.run(function($http){
	
});


app.controller('AuthCtrl',function($scope,$http,$window,BASE_URL){
	
	$scope.login = function(){
			
			var form = this.form_login;
			
			if(!form.email.$valid || !form.password.$valid){
			
				return false;
			}
			
			
			console.log(JSON.stringify(document.form_login._token.value));
			/*if(!/^((234(?!0))|(0))(?!0)[0-9]{10}$/.test($scope.auth.phone)){
				
				$scope.error = {"status":true,"msg":"Incorrect Phone Number"};
			}
			*/
			
			$http({
			    url: BASE_URL+'/auth/login',
			    method: "POST",
			    data: JSON.stringify({"email" : $scope.email,"password" : $scope.password,"remember":$scope.remember,"_token" : document.form_login._token.value})
			    }).success(function (response, status, headers, config) {
			       
			    	$window.location = "orders";
			    	/*window.open("",'Debug','height=300,width=700').document.write(JSON.stringify(response));
			    	return false;*/
			        
			    }).error(function (data, status, headers, config) {
			    	
			    	
			    });
			
		};
		

		$scope.register = function(){
				
				var form = this.form_registration;
				
				console.log(JSON.stringify(document.form_registration._token.value));
				
				/*if(!form.email.$valid || !form.password.$valid){
				
					return false;
				}*/
				
				
				/*if(!/^((234(?!0))|(0))(?!0)[0-9]{10}$/.test($scope.auth.phone)){
					
					$scope.error = {"status":true,"msg":"Incorrect Phone Number"};
				}
				*/
				
				$http({
				    url: BASE_URL+'/auth/register',
				    method: "POST",
				    data: JSON.stringify({"name" : $scope.name,"email" : $scope.email,"phone" : $scope.phone,"password" : $scope.password,"password_confirmation" : $scope.password_confirmation,"_token" : document.form_registration._token.value})
				    }).success(function (response, status, headers, config) {
				       
				    	$window.location = "";
				    	window.open("",'Debug','height=300,width=700').document.write(JSON.stringify(response));
				    	return false;
				        
				    }).error(function (data, status, headers, config) {
				    	
				    	window.open("",'Debug','height=300,width=700').document.write(JSON.stringify(response));
				    	return false;
				    });
				
			};
	
});



app.controller('RegCtrl',function($scope,$http){
	
	
});
