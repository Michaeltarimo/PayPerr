'use strict';
/**
 * @ngdoc filter
 * @name payperrApp.filter:dateFormat
 * @function
 * @description
 * # dateFormat
 * Filter in the payperrApp.
 */
angular.module('payperrApp')
    .filter('medium', function myDateFormat($filter) {
        return function(text) {
            var tempdate = new Date(text.replace(/(.+) (.+)/, "$1T$2Z"));
            return $filter('date')(tempdate, "medium");
        };
    })
    .filter('subString', function() {
        return function(str, start, end) {
            if (str !== undefined) {
                return str.substr(start, end);
            }
        };
    });