'use strict';
/**
 * @ngdoc service
 * @name payperrApp.usersAddress
 * @description
 * # usersAddress
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('usersAddress', ['$resource', function($resource) {
        return $resource('/api/v1/users/:user_id/user_addresses/:user_address_id', {}, {
            remove: {
                method: 'DELETE',
                params: {
                    user_id: '@user_id',
                    address_id: '@user_address_id'
                }
            }
        });
  }]);