'use strict'

angular.module('potatoApp', ['ngResource', 'ui.bootstrap', 'ui.router', 'potatoApp.admin', 'potatoApp.controllers', 'potatoApp.services', 'potatoApp.directives', 'potatoApp.filters']);

angular.module('potatoApp').run(['$state', '$rootScope',function($state, $rootScope){
	$state.go('admin');
}]);