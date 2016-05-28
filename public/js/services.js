app.service("Order",function(){
	this.data=[{measurements:[["",""],["",""],["",""]],unit:"inches","qty":1,"priority":"average","pay":{"percentage":0},"order_date":new Date()}];
	this.i=0;
	
	this.pointer=function(n){
		if(!angular.isDefined(n)) return this.i;
		return this.i=n;
	};
	
	this.set=function(data){
		this.data.push(data);
		this.pointer(this.data.length-1);
	};
	
	this.remove=function(n){
		this.data.splice(n,1);
		this.pointer(n-1);
	};
	
	this.get=function(){
			return this.data;
	};
	
	this.reset=function(){
		this.pointer(0);
		this.data=[];
	};
		
	return this;
});

app.service("Reminder",function(Notification,$http,$interval,$timeout){
	
	$scope=new Object();
	$scope.notify = function(type,msg) {
          Notification.warning(msg);
          return true;
      };
      
      $scope.isServed=function(order_id){
    	  $http.get('api/order/reminder/'+order_id+'/served');
      };
      
      $scope.data=[];
      //$scope.data=[{"type":"info","msg":{"message":"Hurry up! Mr. Aliu Adepoju might be too excited to get the order in 3 days time<br\/><i class='icon-classic8'><\/i>&nbsp;Rachel Bradley","title":"GET <a href='#'>ORDER# 00001<\/a> READY FOR DELIVERY","replaceMessage":true},"order_id":"1"},{"type":"info","msg":{"message":"Hurry up! Mr. Aliu Adepoju might be too excited to get the order in 0 days time<br\/><i class='icon-classic8'><\/i>&nbsp;Hamza M","title":"GET <a href='#'>ORDER# 00007<\/a> READY FOR DELIVERY","replaceMessage":true},"order_id":"7"}];
      
      this.run=function(){
 		 $interval(function(){
 	    	
 	    	  if($scope.data.length == 0){
 	    		 
 	    		  $http.get('api/order/reminder').success(function(data, status, headers, config){
 	    			 $scope.data=data;
 	    			// console.log(data);
 					}).error(function(data, status, headers, config) {
 						console.log('Error: ',JSON.stringify(data),' ',status);
 				    });
 	    		  return false;
 	    	  }
 	    	  
 	    	  $timeout(function(){
 	    		 data=$scope.data.shift();
 	    		
 	    		 if($scope.notify(data.type,data.msg)){
 	    			 sound.play();
 	    			 $scope.isServed(data.order_id);
 	    		 }
 	    	  },12000);
 	    	  
 	      },17000);
 	};
	
	return this;
});