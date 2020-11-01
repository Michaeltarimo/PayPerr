'use strict';
/**
 * @ngdoc service
 * @name PayPerr
 * @UserFlagFactory
 * # Customservices
 * Factory in the PayPerr.
 */
angular.module('payperrApp.Common.UserFlag')
    .factory('FlagsFactory', ['$resource', function($resource) {
        return $resource('/api/v1/flags', {}, {
            create: {
                method: 'POST'
            }
        });
    }])
    .factory('FlagCategoriesFactory', ['$resource', function($resource) {
        return $resource('/api/v1/flag_categories', {}, {
            get: {
                method: 'GET'
            }
        });
    }]);