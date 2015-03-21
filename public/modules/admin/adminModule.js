'use strict';

angular.module('potatoApp.admin',['potatoApp.admin.controllers','potatoApp.admin.directives','potatoApp.admin.services','potatoApp.admin.filters']);

angular.module('potatoApp.admin').config(['$stateProvider','$locationProvider',function($stateProvider, $locationProvider){
    $stateProvider.state('admin',{
        url:'/batches/create',
        controller: 'BatchCreateController',
        templateUrl:'modules/admin/views/batch/create.html'
    });
}]);