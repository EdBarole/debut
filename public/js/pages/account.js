/*!
 * Styld.com 1.2.0
 * Docs & License: http://freelancer.com/u/njose.html
 * (c) 2017 Sebastian Njose
 */

var styld = angular.module('Styld', []);

styld.controller('mainCtrl', function ($scope, $http) {

    $scope.notification = {};
    $scope.timezones = [
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

    // Active session
    $http({ url: '/api/auth', method: 'GET', params: { status: true } }).then(function (response) {

        if (response.data.status == 200) {
            //
            $scope.user = response.data.data;
        }

    });

    // Update
    $scope.submitForm = function () {
        //
        var input = {
            //
            id: $scope.user.id,
            firstName: $scope.user.firstName,
            lastName: $scope.user.lastName,
                // full name
                //userFullname: $scope.user.firstName + ' ' + $scope.user.lastName,
            location: $scope.user.location,
            gender: $scope.user.gender,
            profile_description: $scope.user.profile_description,
            //email: $scope.user.email,
            timeZone: $scope.user.timeZone
        };

        $http({url: '/api/users/' + input.id, method: 'PUT', data: input}).then(function (response) {
            //
            $scope.notification.visible = true;
            $scope.notification.className = (response.data.status == 200) ? 'alert-success' : 'alert-danger';
            $scope.notification.message = response.data.message;
        });
    };

});