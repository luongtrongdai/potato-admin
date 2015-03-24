'use strict';

angular.module('potatoApp.admin.services',[])
    .factory('Batch',['$resource', 'BATCH_ENDPOINT',function($resource, BATCH_ENDPOINT){
        return $resource(BATCH_ENDPOINT, { id: '@_id' }, {
            update: {
                method: 'PUT'
            }
        });
    }])
    . factory('shipperService', function ($http) {
        return {
            getListShipper: function () {
                return $http.get("shippers/list", {})
                            .then(function(data) {
                                return data;
                            });
            }
        }
    });

angular.module('potatoApp.admin.services').value('BATCH_ENDPOINT','batches/:id');