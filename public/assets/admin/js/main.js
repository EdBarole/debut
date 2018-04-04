/**
 * Debut console for melek app. Powered by angularjs v1.
 * 
 * @author Sebastian Njose <s3bastian06@gmail.com>
 * @license http://www.github.com/sebastiannjose
 */

angular.module('Melek', [
		'ngRoute',
		'angularMoment',
		'angular-flot',
		'ADM-dateTimePicker',
		'ui.bootstrap.modal',
		'ngFileUpload',
		'datatables',
		'datatables.buttons',
		'ngModal',
		'summernote',
		'ui.select',
		'ngSanitize'
])

.config(['$routeProvider', 'ADMdtpProvider', 'ngModalDefaultsProvider', function ($routeProvider, ADMdtp, ngModalDefaultsProvider) {
	
	$routeProvider
		.when('/', {
				templateUrl: 'views/dashboard.html',
				controller: 'dashboardController'
		})
		.when('/dashboard', {
			templateUrl: 'views/dashboard.html',
			controller: 'dashboardController'
		})
		.when('/brands', {
				templateUrl: 'views/brands/index.html',
				controller: 'brandsController'
		})
		.when('/brands/add', {
				templateUrl: 'views/brands/add.html',
				controller: 'addBrandController'
		})
		.when('/brands/:index/edit', {
				templateUrl: 'views/brands/edit.html',
				controller: 'editBrandController'
		})
		.when('/posts', {
				templateUrl: 'views/posts/index.html',
				controller: 'postsController'
		})
		.when('/posts/add', {
				templateUrl: 'views/posts/add.html',
				controller: 'addPostController'
		})
		.when('/users', {
				templateUrl: 'views/users/index.html',
				controller: 'usersController'
		})
		.when('/users/add', {
				templateUrl: 'views/users/add.html',
				controller: 'addUserController'
		})
		.when('/edit-profile', {
			templateUrl: 'views/edit-profile.html',
			controller: 'editProfileController'
		})
		.when('/change-password', {
			templateUrl: 'views/change-password.html',
			controller: 'changePasswordController'
		})
		.otherwise({
			redirectTo: '/'
		});

		ADMdtp.setOptions({
				calType: 'gregorian',
				format: 'YYYY/MM/DD hh:mm',
				default: 'today',
				autoClose: true,
				transition: true
		});

		ngModalDefaultsProvider.set('closeButtonHtml', '<i class="fa fa-times"></i>');

}])

.filter('propsFilter', function() {
		return function(items, props) {
				var out = [];

				if (angular.isArray(items)) {
						var keys = Object.keys(props);

						items.forEach(function(item) {
								var itemMatches = false;

								for (var i = 0; i < keys.length; i++) {
										var prop = keys[i];
										var text = props[prop].toLowerCase();
										if (item[prop].toString().toLowerCase().indexOf(text) !== -1) {
												itemMatches = true;
												break;
										}
								}

								if (itemMatches) {
										out.push(item);
								}
						});
				} else {
						// Let the output be the input untouched
						out = items;
				}

				return out;
		};
})

.directive('allowNumbersOnly', function(){
		return {
				require: 'ngModel',
				link: function(scope, element, attrs, modelCtrl) {
						//ngModelCtrl.$parsers.push(callback);
						modelCtrl.$parsers.push(function (theInput) {
								//
								var theResponse = theInput.toLowerCase().replace(/[^0-9\+]/g, '');
								//console.log(theResponse);
								if (theResponse != theInput) {
										//
										modelCtrl.$setViewValue(theResponse);
										modelCtrl.$render();
								}
								return theResponse;
						});
				}
		};
})

.directive('onlyValidInput', function(){
		return {
				require: 'ngModel',
				link: function(scope, element, attrs, modelCtrl) {
						//ngModelCtrl.$parsers.push(callback);
						modelCtrl.$parsers.push(function (theInput) {
								//
								var theResponse = theInput.toLowerCase().replace(/[^a-zA-Z0-9\-_\s]/g, '');
								//console.log(theResponse);
								if (theResponse != theInput) {
										//
										modelCtrl.$setViewValue(theResponse);
										modelCtrl.$render();
								}
								return theResponse;
						});
				}
		};
})

.directive('tooltip', function () {
		return {
				restrict: 'A',
				link: function (scope, element, attrs) {
						$(element).hover(function () {
								// on mouseenter
								$(element).tooltip('show');
						}, function () {
								// on mouseleave
								$(element).tooltip('hide');
						});
				}
		};
})

.factory('adminFactoryService', function () {

		var _timezones = [
						{ key: '-12', value: '(GMT -12:00) Eniwetok, Kwajalein' },
						{ key: '-11', value: '(GMT -11:00) Midway Island, Samoa' },
						{ key: '-10', value: '(GMT -10:00) Hawaii' },
						{ key: '-9', value: '(GMT -9:00) Alaska' },
						{ key: '-8', value: '(GMT -8:00) Pacific Time (US &amp; Canada)' },
						{ key: '-7', value: '(GMT -7:00) Mountain Time (US &amp; Canada)' },
						{ key: '-6', value: '(GMT -6:00) Central Time (US &amp; Canada), Mexico City' },
						{ key: '-5', value: '(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima' },
						{ key: '-4', value: '(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz' },
						{ key: '-3.5', value: '(GMT -3:30) Newfoundland' },
						{ key: '-3', value: '(GMT -3:00) Brazil, Buenos Aires, Georgetown' },
						{ key: '-2', value: '(GMT -2:00) Mid-Atlantic' },
						{ key: '-1', value: '(GMT -1:00 hour) Azores, Cape Verde Islands' },
						{ key: '0', value: '(GMT) Western Europe Time, London, Lisbon, Casablanca' },
						{ key: '1', value: '(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris' },
						{ key: '2', value: '(GMT +2:00) Kaliningrad, South Africa' },
						{ key: '3', value: '(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg' },
						{ key: '3.5', value: '(GMT +3:30) Tehran' },
						{ key: '4', value: '(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi' },
						{ key: '4.5', value: '(GMT +4:30) Kabul' },
						{ key: '5', value: '(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent' },
						{ key: '5.5', value: '(GMT +5:30) Bombay, Calcutta, Madras, New Delhi' },
						{ key: '5.75', value: '(GMT +5:45) Kathmandu' },
						{ key: '6', value: '(GMT +6:00) Almaty, Dhaka, Colombo' },
						{ key: '7', value: '(GMT +7:00) Bangkok, Hanoi, Jakarta' },
						{ key: '8', value: '(GMT +8:00) Beijing, Perth, Singapore, Hong Kong' },
						{ key: '9', value: '(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk' },
						{ key: '9.5', value: '(GMT +9:30) Adelaide, Darwin' },
						{ key: '10', value: '(GMT +10:00) Eastern Australia, Guam, Vladivostok' },
						{ key: '11', value: '(GMT +11:00) Magadan, Solomon Islands, New Caledonia' },
						{ key: '12', value: '(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka' }
		];

		return {
				//
				settings: { authorized: false, user: null },
				notification: { visible: false, icon: 'md-alert-circle-o', class: 'alert-danger', message: '' },
				albums: [],
				brands: [],
				pages: [],
				topbrands: [],
				users: [],
				theChartData: {},
				timezones: _timezones
		};

})

.factory('chartFactoryService', function () {

		var response = {};

		response.barWidth = 60 * 60 * 10000;	// 0.5

		response.makeDataset = function (theData) {
				//
				var dataset = [
						{
								color: "red",
								label: "Subscriptions",
								data: theData.subscriptions,
								bars: {
										order: 1,
										show: true,
										borderWidth: 0,
										barWidth: 60 * 60 * 10000,
										lineWidth: .5,
										fillColor: {
												colors: [{ opacity: 0.4 }, { opacity: 1 }]
										}
								}
						},
						{
								color: "orange",
								label: "Renewals",
								data: theData.renewals,
								bars: {
										show: false
								},
								lines: {
										show: true,
										fill: false,
										fillColor: {
												colors: [{ opacity: 0.3 }, { opacity: 0 }]
										}
								},
								points: {
										show: true
								}
						}
				];

				return dataset;

		};

		response.singleBarDataset = function (theData) {
				//
				var dataset = [
						{
								color: "red",
								label: "Topups",
								data: theData.topups,
								bars: {
										order: 1,
										show: true,
										borderWidth: 0,
										barWidth: 60 * 60 * 10000,
										lineWidth: .5,
										fillColor: {
												colors: [{ opacity: 0.4 }, { opacity: 1 }]
										}
								}
						}
				];

				return dataset;

		};

		response.singleLineDataset = function (theData) {
				//
				var dataset = [
						{
								color: "red",
								label: "Revenue",
								data: theData.revenue,
								bars: {
										show: false
								},
								lines: {
										show: true,
										fill: false,
										fillColor: {
												colors: [{ opacity: 0.3 }, { opacity: 0 }]
										}
								},
								points: {
										show: true
								}
						}
				];

				return dataset;

		};

		response.options = {
						//
						daily: {
								//
								legend: {
										show: true
								},
								xaxis: {
										mode: "time",
										timeformat: "%d %b",
										tickSize: [1, "day"],
										tickDecimals: 0,
										color: '#dddddd'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
								},
								yaxis: {
										min: 0,
										tickLength: 0,
										color: '#dddddd'                                                                                                  
								},
								grid: {
										hoverable: true,
										clickable: false,
										borderWidth: 0,
										aboveData: false,
										color: '#999999'

								},
								tooltip: true,
								tooltipOpts: {
										defaultTheme: false,
										content: "<b>%s</b> : <span>%y</span>"
								}
						},
						//
						weekly: {
								//
								series: {
										bars: {
												show: true,
												barWidth: 0.6,
												align: 'left'
										}
								},
								xaxis: {
										mode: 'brands',
										tickLength: 0
								},
								grid: {
										hoverable: true,
										clickable: false,
										borderWidth: 0,
										aboveData: false,
										color: '#999999'

								},
								tooltip: true,
								tooltipOpts: {
										defaultTheme: false,
										content: "<b>%s</b> : <span>%y</span>"
								}
						}
		};

		return response;

})

.run(function ($rootScope, $http, $location, adminFactoryService) {
		$rootScope.$on('$routeChangeStart', function (e) {
				/**
				 * OBSELETE! Use http interceptors
				 */
		});
})

.controller('loginController', function ($scope, $http, adminFactoryService) {
		//
		//$scope.$watch(Auth.isLoggedIn, function (value, oldValue) {});
})

.controller('mainController', function ($scope, $http, $location, $window, adminFactoryService) {
		
		$scope.settings = adminFactoryService.settings;
		$scope.notification = adminFactoryService.notification;

		$scope.login = { email: '', password: '', json: true };

		// Login
		$scope.submitForm = function () {

			adminFactoryService.settings.authorized = true;
			adminFactoryService.settings.user = { firstName: 'Sohastian', lastName: 'Njose' };
			adminFactoryService.settings.user.profile_photo = 'assets/images/avatar.jpg';

			return false;
			
			////

				var login = $scope.login;

				if (login.email == '' || login.password == '') {
						//
						adminFactoryService.notification.visible = true;
						adminFactoryService.notification.message = "Invalid login details.";

						return false;
				}

				$http.post('/api/users', $scope.login).then(function (response) {

						if (response.data.status == 200) {
								//
								adminFactoryService.notification.visible = false;

								adminFactoryService.settings.user = response.data.data;
								adminFactoryService.settings.user.profile_photo = '../backoffice/assets/images/avatar.jpg';

								if ($location.path() == "" || $location.path() == "/") {
										$location.path('/brands');
								}

								return false;
						}

						adminFactoryService.notification.visible = true;
						adminFactoryService.notification.message = response.data.message;
						
				});

		};

		$scope.logout = function () {
				//
				$http({ url: '/logout', method: 'GET', params: { json: true } }).then(function (response) {

						if (response.data.status == 301) {

								adminFactoryService.settings.authorized = false;

								$window.location.href = '../admin/';

								return false;
						}

				});
		};

})

.controller('dashboardController', function ($scope, $http, adminFactoryService, chartFactoryService) {

	adminFactoryService.notification.visible = false;

	$scope.last_login = moment('2017-04-05');

		// console.log('NJ, to the top!');

})

.controller('brandsController', function (DTOptionsBuilder, DTColumnBuilder, $scope, $http, $q, adminFactoryService) {

		$scope.notification = adminFactoryService.notification;

		// Display data in datatables
		$scope.dtOptions = DTOptionsBuilder.fromFnPromise(function () {

				var defer = $q.defer();

				$http.get('/api/brands').then(function (response) {
						//
						defer.resolve(response.data);

						adminFactoryService.brands = response.data;

						$scope.brands = adminFactoryService.brands;
				});

				return defer.promise;

		})
		.withPaginationType('full_numbers')
		.withOption('rowCallback', function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
		
				// unbind first in order to avoid any duplicate handler
				$('td', nRow).unbind('click');
				$('td', nRow).bind('click', function () {
						$scope.$apply(function () {
								//$scope.showDetails(aData);
								$scope.brand = aData;

								// Get index
								angular.forEach($scope.brands, function (value, key) {
										if (aData.id == value.id) {
												$scope.brand.index = key;
										}
								});

								// Toggle dialog visibility
								$scope.showDialog = true;
						});
				});

				return nRow;
		})
		.withButtons([
				'copy',
				'print',
				'excel'
		]);

		$scope.dtColumns = [
			DTColumnBuilder.newColumn('title').withTitle('Title'),
			DTColumnBuilder.newColumn('price').withTitle('Price')
		];

		$scope.delete = function (index) {

				var brand = $scope.brands[index];
				
				$http({url: '/api/brands/' + brand.id, method: 'DELETE'}).then(function (response) {
						//
						adminFactoryService.brands.splice(index, 1);

						adminFactoryService.notification.visible = true;
						adminFactoryService.notification.message = response.data.message;
								
						// Toggle dialog visibility
						$scope.showDialog = false;
				});
		};

})

.controller('addBrandController', function ($scope, $http, adminFactoryService) {

	adminFactoryService.notification.visible = false;

	$scope.input = { title: '', price: '', amount_invested: '', enabled: true };

	// Create
	$scope.submitForm = function () {

		// Capture input
		var input = $scope.input;

		$http.post('/api/brands', $scope.input).then(function (response) {
				//
				if (response.status == 201) {
					adminFactoryService.brands.push(input);
				}

				// Update notification
				adminFactoryService.notification.visible = true;
				adminFactoryService.notification.message = response.statusText;

				// List brands
				window.location.href='#!/brands';
		});

	};

})

.controller('editBrandController', function ($scope, $http, $routeParams, adminFactoryService) {

		adminFactoryService.notification.visible = false;

		if (adminFactoryService.brands.length === 0) {
				//
				window.location.href = '#!/brands'; return false;
		}

		$scope.input = adminFactoryService.brands[$routeParams['index']];

		$scope.submitForm = function () {
				//
				var input = $scope.input;

				if (input.title == '') {
						//
						$scope.errors = true;

						return false;
				}

				$http({url: '/api/brands/' + input.id, method: 'PUT', data: $scope.input}).then(function (response) {
						//
						adminFactoryService.brands[$routeParams['index']] = input;

						// Update notification
						adminFactoryService.notification.visible = true;
						adminFactoryService.notification.message = response.data.message;

						// List brands
						window.location.href='#!/brands';
				});
		};

})

.controller('postsController', function (DTOptionsBuilder, DTColumnBuilder, $scope, $http, $q, adminFactoryService) {

		$scope.notification = adminFactoryService.notification;

		// Display data in datatables
		$scope.dtOptions = DTOptionsBuilder.fromFnPromise(function () {

				var defer = $q.defer();

				$http.get('http://localhost:8000/api/posts').then(function (response) {
						//
						defer.resolve(response.data);

						adminFactoryService.posts = response.data;

						$scope.posts = adminFactoryService.posts;
				});

				return defer.promise;

		})
		.withPaginationType('full_numbers')
		.withOption('rowCallback', function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
		
				// unbind first in order to avoid any duplicate handler
				$('td', nRow).unbind('click');
				$('td', nRow).bind('click', function () {
						$scope.$apply(function () {
								//$scope.showDetails(aData);
								$scope.post = aData;

								// Get index
								angular.forEach($scope.posts, function (value, key) {
										if (aData.id == value.id) {
												$scope.post.index = key;
										}
								});

								// Toggle dialog visibility
								$scope.showDialog = true;
						});
				});

				return nRow;
		})
		.withButtons([
				'copy',
				'print',
				'excel'
		]);

		$scope.dtColumns = [
			DTColumnBuilder.newColumn('title').withTitle('Title'),
			DTColumnBuilder.newColumn('created_at').withTitle('Created At')
		];

		$scope.delete = function (index) {

				var post = $scope.posts[index];
				
				$http({url: '/api/posts/' + post.id, method: 'DELETE'}).then(function (response) {
						//
						adminFactoryService.posts.splice(index, 1);

						adminFactoryService.notification.visible = true;
						adminFactoryService.notification.message = response.data.message;
								
						// Toggle dialog visibility
						$scope.showDialog = false;
				});
		};

})

.controller('addPostController', function ($scope, $http, adminFactoryService) {

	adminFactoryService.notification.visible = false;

	$scope.input = { title: '', price: '', amount_invested: '', enabled: true };

	// Create
	$scope.submitForm = function () {

		// Capture input
		var input = $scope.input;

		$http.post('/api/posts', $scope.input).then(function (response) {
				//
				if (response.status == 201) {
					adminFactoryService.posts.push(input);
				}

				// Update notification
				adminFactoryService.notification.visible = true;
				adminFactoryService.notification.message = response.statusText;

				// List posts
				window.location.href='#!/posts';
		});

	};

})

.controller('usersController', function (DTOptionsBuilder, DTColumnBuilder, $scope, $http, $q, adminFactoryService) {

		$scope.notification = adminFactoryService.notification;

		// Display data in datatables
		$scope.dtOptions = DTOptionsBuilder.fromFnPromise(function () {

				var defer = $q.defer();

				$http.get('http://localhost:8000/api/users').then(function (response) {
						//
						defer.resolve(response.data);

						adminFactoryService.users = response.data;

						$scope.users = adminFactoryService.users;
				});

				return defer.promise;

		})
		.withPaginationType('full_numbers')
		.withOption('rowCallback', function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
		
				// unbind first in order to avoid any duplicate handler
				$('td', nRow).unbind('click');
				$('td', nRow).bind('click', function () {
						$scope.$apply(function () {
								//$scope.showDetails(aData);
								$scope.user = aData;

								// Get index
								angular.forEach($scope.users, function (value, key) {
										if (aData.id == value.id) {
												$scope.user.index = key;
										}
								});

								// Toggle dialog visibility
								$scope.showDialog = true;
						});
				});

				return nRow;
		})
		.withButtons([
				'copy',
				'print',
				'excel'
		]);

		$scope.dtColumns = [
			DTColumnBuilder.newColumn('name').withTitle('Name'),
			DTColumnBuilder.newColumn('email').withTitle('Email'),
			DTColumnBuilder.newColumn('created_at').withTitle('Created At')
		];

		$scope.delete = function (index) {

				var user = $scope.users[index];
				
				$http({url: '/api/users/' + user.id, method: 'DELETE'}).then(function (response) {
						//
						adminFactoryService.users.splice(index, 1);

						adminFactoryService.notification.visible = true;
						adminFactoryService.notification.message = response.data.message;
								
						// Toggle dialog visibility
						$scope.showDialog = false;
				});
		};

})

.controller('addUserController', function ($scope, $http, adminFactoryService) {

	adminFactoryService.notification.visible = false;

	$scope.input = { title: '', price: '', amount_invested: '', enabled: true };

	// Create
	$scope.submitForm = function () {

		// Capture input
		var input = $scope.input;

		$http.post('/api/users', $scope.input).then(function (response) {
				//
				if (response.status == 201) {
					adminFactoryService.users.push(input);
				}

				// Update notification
				adminFactoryService.notification.visible = true;
				adminFactoryService.notification.message = response.statusText;

				// List users
				window.location.href='#!/users';
		});

	};

})

.controller('editProfileController', function ($scope, $http, adminFactoryService) {

		adminFactoryService.notification.visible = false;
	
	$scope.profile = adminFactoryService.settings.user;
	$scope.notification = adminFactoryService.notification;

	$scope.submitForm = function () {
		//
		var profile = $scope.profile;

		if (profile.names == '' || profile.email == '' || profile.phone == '') {
			//
			$scope.errors = true;

			return false;
		}

		$http({url: 'edit-profile.php', method: 'PUT', data: $scope.profile}).then(function (response) {
			//
			adminFactoryService.notification.visible = true;
			adminFactoryService.notification.message = response.data.message;
		});
	};

})

.controller('changePasswordController', function ($scope, $http, adminFactoryService) {

		adminFactoryService.notification.visible = false;

	$scope.notification = adminFactoryService.notification;
	$scope.password = { current: '', new: '', repeat_new: '' };

	$scope.submitForm = function () {
		//
		var password = $scope.password;

		if (password.current == '' || password.new.length < 4 || password.new != password.repeat_new) {
			//
			$scope.errors = true;

			return false;
		}

		$http({url: 'change-password.php', method: 'PUT', data: $scope.password}).then(function (response) {
			//
			adminFactoryService.notification.visible = true;
			adminFactoryService.notification.message = response.data.message;

			if (response.data.status == 200) {
				//
				$scope.password = { current: '', new: '', repeat_new: '' };
				$scope.errors = false;
			}
		});
	};

});
