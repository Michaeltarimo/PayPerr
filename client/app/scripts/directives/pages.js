'use strict';
/**
 * @ngdoc directive
 * @name payperrApp.directive:pages
 * @description
 * # pages
 */
angular.module('payperrApp')
    .directive('pages', function(pages) {
        return {
            templateUrl: 'views/pages.html',
            restrict: 'E',
            replace: 'true',
            link: function postLink(scope, element, attrs) {
                //jshint unused:false
                var params = {
                    limit: 4
                };
                pages.get(params, function(response) {
                    if (angular.isDefined(response.data)) {
                        scope.pages = response.data;
                    }
                });
            }
        };
    });