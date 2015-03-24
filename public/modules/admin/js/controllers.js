'use strict';

angular.module('potatoApp.admin.controllers',[]);

angular.module('potatoApp.admin.controllers',[])
    .controller('BatchCreateController',['$scope', '$state', 'Batch', 'shipperService', function($scope, $state, Batch, shipperService) {
        $scope.batch = new Batch();

        $scope.buttonText="Create";

        $scope.batch.dateReceipt = new Date().toISOString().slice(0, 10);

        $scope.shippers = [];

        shipperService.getListShipper().then(function(response){
            $scope.shippers = response.data;
        });
        
        $scope.createBatch = function () {
            $scope.buttonText="Saving. . .";

            $scope.batch.$save(function(){
                $state.go('admin');
            });
        }
    }]);