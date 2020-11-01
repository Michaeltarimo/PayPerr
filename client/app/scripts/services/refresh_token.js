'use strict';
/**
 * @ngdoc service
 * @name payperrApp.refreshToken
 * @description
 * # refreshToken
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('refreshToken', ['$resource', function($resource) {
        return $resource('/api/v1/oauth/refresh_token', {}, {
            get: {
                method: 'GET'
            }
        });
  }]);