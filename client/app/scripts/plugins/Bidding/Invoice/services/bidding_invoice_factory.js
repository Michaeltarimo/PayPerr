'use strict';
/**
 * @ngdoc function
 * @name payperrApp.controller:BiddingMilestoneCtrl
 * @description
 * # QuoteServicePhotosManageController
 * Controller of the payperrApp
 */
angular.module('payperrApp.Bidding.Invoice')
    .factory('MeInvoice', function($resource) {
        return $resource('/api/v1/me/project_bid_invoices', {}, {
            get: {
                method: 'GET'
            }
        });
    });