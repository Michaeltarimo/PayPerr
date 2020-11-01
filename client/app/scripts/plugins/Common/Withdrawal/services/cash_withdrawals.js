'use strict';
/**
 * @ngdoc service
 * @name payperrApp.cashWithdrawals
 * @description
 * # cashWithdrawals
 * Factory in the payperrApp.
 */
angular.module('payperrApp.Common.Withdrawal')
    .factory('cashWithdrawals', ['$resource', function($resource) {
        return $resource('/api/v1/users/:user_id/user_cash_withdrawals', {}, {
            get: {
                method: 'GET',
                params: {
                    user_id: '@user_id'
                }
            },
            save: {
                method: 'POST',
                params: {
                    user_id: '@user_id'
                }
            },
        });
  }]);