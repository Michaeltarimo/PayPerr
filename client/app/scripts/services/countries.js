'use strict';
/**
 * @ngdoc service
 * @name payperrApp.countries
 * @description
 * # countries
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('countries', ['$resource', function($resource) {
        return $resource('/api/v1/countries', {}, {
            get: {
                method: 'GET'
            }
        });
  }]);