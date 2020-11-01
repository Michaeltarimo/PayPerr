'use strict';
/**
 * @ngdoc service
 * @name payperrApp.providers
 * @description
 * # providers
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('providers', ['$resource', function($resource) {
        return $resource('/api/v1/providers', {}, {
            get: {
                method: 'GET'
            }
        });
  }]);