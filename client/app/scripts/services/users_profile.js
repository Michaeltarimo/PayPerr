'use strict';
/**
 * @ngdoc service
 * @name payperrApp.usersProfile
 * @description
 * # usersProfile
 * Factory in the payperrApp.
 */
angular.module('payperrApp')
    .factory('usersProfile', function() {
        // Service logic
        // ...
        var meaningOfLife = 42;
        // Public API here
        return {
            someMethod: function() {
                return meaningOfLife;
            }
        };
    });