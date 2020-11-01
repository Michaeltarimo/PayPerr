'use strict';
/**
 * @ngdoc service
 * @name payperrApp.attachment
 * @description
 * # attachment
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('attachment', ['$resource', function($resource) {
        return $resource('/api/v1/attachments/', {}, {
            create: {
                method: 'POST'
            }
        });
  }]);