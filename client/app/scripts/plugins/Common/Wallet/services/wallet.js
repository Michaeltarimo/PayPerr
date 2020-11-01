'use strict';
/**
 * @ngdoc service
 * @name payperrApp.wallet
 * @description
 * # wallet
 * Factory in the payperrApp.
 */
angular.module('payperrApp.Common.Wallet')
    .factory('wallet', ['$resource', function($resource) {
        return $resource('/api/v1/wallets', {}, {
            create: {
                method: 'POST'
            }
        });
    }]);