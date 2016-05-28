app.directive('edit', function() {
	  return {
	    require: 'ngModel',
	    link: function(scope, element, attrs, ctrl) {
	      // view -> model
	      element.bind('blur', function() {
	        scope.$apply(function() {
	          ctrl.$setViewValue(element.html());
	        });
	      });

	      // model -> view
	      ctrl.$render = function() {
	        element.html(ctrl.$viewValue);
	      };

	      // load init value from DOM
	      ctrl.$render();
	    }
	  };
	});


/*<div class="loading-spiner-holder" data-loading ><div class="loading-spiner"><img src="..." /></div></div>*/

app.directive('loading', function ($http) {
    return {
        restrict: 'A',
        link: function (scope, elm, attrs)
        {
            scope.isLoading = function () {
                return $http.pendingRequests.length > 0;
            };

            scope.$watch(scope.isLoading, function (v)
            {
                if(v){
                    elm.show();
                }else{
                    elm.hide();
                }
            });
        }
    };

});