'use strict';
/**
 * @ngdoc service
 * @name payperrApp.Common.UserFollow
 * @description
 * # FollowersFactory
 * Factory in the payperrApp.
 */
angular.module('payperrApp.Common.UserFollow')
    .factory('FollowersFactory', ['$resource', function($resource) {
        return $resource('/api/v1/followers', {}, {
              get: {
                  method: 'GET'
              },
              create: {
                  method: 'POST'
              }
       })
  }])
    .factory('UnfollowFactory', ['$resource', function($resource) {
        return $resource('/api/v1/followers/:followerId', {}, {
              remove: {
                  method: 'DELETE',
                  params: {
                      followerId: '@followerId'
                  }
              }
          });
  }]); 