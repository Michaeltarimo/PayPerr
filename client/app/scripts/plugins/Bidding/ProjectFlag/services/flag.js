  'use strict';
  angular.module('payperrApp.Bidding.ProjectFlag')
      .factory('ReportProject', ['$resource', function($resource) {
          return $resource('/api/v1/flags', {}, {
              get: {
                  method: 'GET'
              },
              post: {
                  method: 'POST'
              }
          });
 }]);