'use strict';
/**
 * @ngdoc service
 * @name payperrApp.usersForgotPassword
 * @description
 * # usersForgotPassword
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('usersForgotPassword', ['$resource', function($resource) {
        return $resource('/api/v1/users/forgot_password', {}, {
            forgetPassword: {
                method: 'POST'
            }
        });
    }]);