'use strict';
/**
 * @ngdoc directive
 * @name payperrApp.directive:notifications
 * @notifications
 * # notifications
 */
angular.module('payperrApp')
 .directive('headerNotification', function () {
    return {
      restrict: 'E',
      replace: true,
      templateUrl: 'views/header_notifications.html'
     /* controller: 'newsFeedsCtrl'*/
    };
  });