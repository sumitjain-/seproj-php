var app = angular.module('classroomAppOne', [
		'ngRoute'
		,'ngAnimate'
	]);

app.config(['$routeProvider', function ($routeProvider) {
	$routeProvider.
		otherwise({
			templateUrl: 'http://localhost:8888/seproj2/index.php/ngviews/index/default'
		});
}])