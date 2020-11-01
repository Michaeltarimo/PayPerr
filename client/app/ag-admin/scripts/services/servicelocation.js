'use strict';
/**
 * @ngdoc service
 * @name payperr.servicelocation
 * @description
 * # paymentGateway
 * Factory in the payperr.
 */
angular.module('base')
    .factory('ServiceLocation', function($resource) {
        return $resource('/api/v1/settings/:id', {}, {
            get: {
                method: 'GET',
                params: {
                    id: '@id'
                }
            },
			put: {
                method: 'PUT',
                params: {
                    id: '@id'
                }
            }
        });
    })
	.factory('CitiesFactory', function($resource) {
        return $resource('/api/v1/cities?limit=all', {}, {
            get: {
                method: 'GET',
            }
        });
    })
	.factory('CountriesFactory', function($resource) {
        return $resource('/api/v1/countries?limit=all', {}, {
            get: {
                method: 'GET',
            }
        });
    });    