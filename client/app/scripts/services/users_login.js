'use strict';
/**
 * @ngdoc service
 * @name payperrApp.usersLogin
 * @description
 * # usersLogin
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('usersLogin', ['$resource', function($resource) {
        return $resource('/api/v1/users/login', {}, {
            login: {
                method: 'POST'
            }
        });
    }])
    .factory('twitterLogin', ['$resource', function($resource) {
        return $resource('/api/v1/users/social_login', {}, {
            login: {
                method: 'POST'
            }
        });
    }]);