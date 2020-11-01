/*globals $:false */
'use strict';
/**
 * @ngdoc overview
 * @name payperrApp
 * @description
 * # payperrApp
 *
 * Main module of the application.
 */
angular.module('payperrApp.Bidding.BiddingReview', [
    'payperrApp.Bidding.Constant',
    'ngResource',
    'ngSanitize',
    'satellizer',
    'ngAnimate',
    'ui.bootstrap',
    'ui.bootstrap.datetimepicker',
    'ui.router',
    'angular-growl',
    'google.places',
    'angular.filter',
    'ngCookies',
    'angular-md5',
    'ui.select2',
    'http-auth-interceptor',
    'angulartics',
    'pascalprecht.translate',
    'angulartics.google.analytics',
    'tmh.dynamicLocale',
    'ngFileUpload',
    'infinite-scroll',
    'ngTagsInput',
    'angularMoment',
    'bc.Flickity',
    'afkl.lazyImage',
    'angular-loading-bar',
    'ngAnimate',
    'slugifier',
    'checklist-model',
    'angularjs-dropdown-multiselect',
    'rzModule'
  ])
    .config(function($stateProvider, $urlRouterProvider) {
        var getToken = {
            'TokenServiceData': function(TokenService, $q) {
                return $q.all({
                    AuthServiceData: TokenService.promise,
                    SettingServiceData: TokenService.promiseSettings
                });
            }
        };
    });