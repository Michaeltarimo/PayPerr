'use strict';
angular.module('payperrApp.Bidding')
    .directive('biddingReviews', function() {
        return {
            restrict: 'EA',
            templateUrl: 'scripts/plugins/Bidding/Dispute/views/default/bidding_project_review.html',
            scope: {
                bidid: '@',
                project: '@',
                biduser: '@',
                projectuser: '@',
                isdispute: '@',
                projectstatus: '@'
            },
            controller: function($scope, $rootScope, $cookies, $state, $filter, flash, biddingReviewFactory, ProjectEditView) {
                $scope.auth = JSON.parse($cookies.get('auth'));
                var flashMessage;
                $scope.review = {};
                 $scope.rating_review = true;
                $scope.reviewSubmit = function(is_valid) {
                if (is_valid && $scope.review.rating == 0){
                        is_valid = false;
                        $scope.rating_review = false;
                    } else if( is_valid && $scope.review.rating > 0 ){
                        is_valid = true;
                        $scope.rating_review = true;
                    }
                    if (is_valid) {
                        if (!$scope.reviewid) {
                        var params = {};
                        params.foreign_id = $scope.bidid;
                        params.class = "Bid";
                        params.rating = $scope.review.rating;
                        params.message = $scope.review.message;
                        biddingReviewFactory.post(params, function(response) {
                            if (response.error.code === 0) {
                                flashMessage = $filter("translate")("review added successfully.");
                                flash.set(flashMessage, 'success', false);
                                $scope.closefrm();
                            } else {
                                flashMessage = $filter("translate")(response.error.message);
                                flash.set(flashMessage, 'error', false);
                            }
                        });
                    } else {
                        var params = {};
                        params.id = $scope.reviewid;
                        params.rating = $scope.review.rating;
                        params.message = $scope.review.message;
                        biddingReviewFactory.put(params, function(response) {
                            if (response.error.code === 0) {
                                flashMessage = $filter("translate")("review updated successfully.");
                                flash.set(flashMessage, 'success', false);
                                $scope.closefrm();
                            } else {
                                flashMessage = $filter("translate")(response.error.message);
                                flash.set(flashMessage, 'error', false);
                            }
                        });
                    }
                };
            }
                /* For close the form */
                $scope.closefrm = function() {
                    $state.go('Bid_ProjectView', {
                        id: $state.params.id,
                        slug: $state.params.slug,
                        action: 'messages'
                    }, {
                        reload: true
                    });
                };

                function usersDetail() {
                    var getParams = {
                        id: $state.params.id,
                        fields: 'id,project_status_id,is_dispute,is_cancel_request_freelancer,is_cancel_request_employer'
                    };
                    ProjectEditView.get(getParams, function(response) {
                        $scope.reviewsLists = response.data.reviews;
                        angular.forEach($scope.reviewsLists, function(reviewList) {
                            if (reviewList.user_id == $rootScope.user.id) {
                                $scope.review.rating = reviewList.rating;
                                $scope.review.message = reviewList.message;
                                $scope.reviewid = reviewList.id;
                            } else {}
                        });
                    });
                };
                usersDetail();
            }
        }
    })