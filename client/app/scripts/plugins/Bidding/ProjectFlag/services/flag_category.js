  'use strict';
  angular.module('payperrApp.Bidding.ProjectFlag')
      .factory('ReportProjectCategories', ['$resource', function($resource) {
          return $resource('/api/v1/flag_categories', {}, {
              get: {
                  method: 'GET'
              }
          });
 }]);