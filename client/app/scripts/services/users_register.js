'use strict';
/**
 * @ngdoc service
 * @name payperrApp.usersRegister
 * @description
 * # usersRegister
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('usersRegister', ['$resource', function($resource) {
        return $resource('/api/v1/users/register', {}, {
            create: {
                method: 'POST'
            }
        });
    }]);