'use strict';
/**
 * @ngdoc service
 * @name payperrApp.contact
 * @description
 * # contact
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('contact', ['$resource', function($resource) {
        return $resource('/api/v1/contacts', {}, {
            create: {
                method: 'POST'
            }
        });
    }]);