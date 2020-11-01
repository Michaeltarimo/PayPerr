  'use strict';
  angular.module('payperrApp.Bidding.ProjectFollow')
      .factory('BookMarkProject', ['$resource', function($resource) {
        return $resource('/api/v1/followers/:id', {}, {
            post: {
                method: 'POST'
            },
            delete: {
                method: 'DELETE'
            }
        });
  }]);