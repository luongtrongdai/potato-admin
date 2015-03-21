'use strict';

angular.module('potatoApp.admin.services',[])
    .factory('Batch',['$resource', 'BATCH_ENDPOINT',function($resource, BATCH_ENDPOINT){
        return $resource(BATCH_ENDPOINT, { id: '@_id' }, {
            update: {
                method: 'PUT'
            }
        });
    }])
    . service('shipperService', function ($http) {
        this.getListShipper = function () {
            $http.get("shippers/list")
                .success(function(response) {
                    return response;
                });
            }
    });


angular.module('potatoApp.admin.services').value('BATCH_ENDPOINT','batches/:id');