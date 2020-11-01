'use strict';
/**
 * @ngdoc service
 * @name payperrApp.page
 * @description
 * # page
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('pages', ['$resource', function($resource) {
        return $resource('/api/v1/pages', {}, {
            get: {
                method: 'GET'
            }
        });
  }]);