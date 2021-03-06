(function() {
    'use strict';
    angular
        .module('Admin')
        .controller('newuserCtrl', ['$scope', '$http', 'config',  function($scope, $http, config) {



        	$scope.alerts = [

                          ];

            $scope.closeAlert = function(index) {
              $scope.alerts.splice(index, 1);
            };



			$scope.create = function(){

                if($scope.fname == null || $scope.lname == null || $scope.email == null || $scope.password == null){
                    $scope.alerts.push({type: 'danger', msg: 'Fill in the required fields.'});
                    return;
                }

				 var dataObj = {
        				fname: $scope.fname,
                        lname: $scope.lname,
                        email: $scope.email,
                        password: $scope.password,
                        phone: $scope.phone,
                        hours: $scope.hours,
                        bio: $scope.bio,
                        instagram: $scope.instagram,
                        twitter: $scope.twitter,
                        google: $scope.google,
                        linkedin: $scope.linkedin

        		};


        		console.log(dataObj);


				$http.post(config.API+'newuser.php', dataObj).then(function(response) {

                    if(response.data == "success"){
					
                        $scope.alerts.push({type: 'success', msg: 'Artist has been created'});
					
                }

                    
				}, function errorCallback(response){
                    //Show Error Alert
					$scope.alerts.push({type: 'danger', msg: 'A Error has occured.'});
				});


                $scope.fname = null;
                $scope.lname = null;
                $scope.email = null;
                $scope.password = null;
                $scope.phone = null;
                $scope.hours = null;
                $scope.bio = null;
                $scope.instagram = null;
                $scope.twitter = null;
                $scope.google = null;
                $scope.linkedin = null;


			}
			

         }]);
})();