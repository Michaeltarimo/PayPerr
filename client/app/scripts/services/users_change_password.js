'use strict';
/**
 * @ngdoc service
 * @name payperrApp.usersChangePassword
 * @description
 * # usersChangePassword
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('usersChangePassword', ['$resource', function($resource) {
        return $resource('/api/v1/users/:id/change_password', {}, {
            changePassword: {
                method: 'PUT',
                params: {
                    id: '@id'
                }
            }
        });
    }]);