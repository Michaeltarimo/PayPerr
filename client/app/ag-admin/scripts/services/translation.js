'use strict';
/**
 * @ngdoc service
 * @name payperr.servicelocation
 * @description
 * # paymentGateway
 * Factory in the payperr.
 */
angular.module('base')
    .factory('TranslationsFactory', function($resource) {
        return $resource('/api/v1/translations', {}, {
            get: {
                method: 'GET',
                params: {
                    lang_code: '@lang_code'
                }
            },
            post: {
                method: 'POST'
            }
        });
    })
    .factory('TranslationFactory', function($resource) {
        return $resource('/api/v1/translations/:lang_code', {}, {
            put: {
                method: 'Put'
            }
        });
    })
    .factory('LanguageFactory', function($resource) {
        return $resource('/api/v1/languages', {}, {
            get: {
                method: 'GET'
            }
        });
    });
     