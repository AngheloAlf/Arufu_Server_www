/**
 * Created by Anghelo on 29-11-2016.
 */

var app = angular.module('verItems', []);
app.controller('verItemsCtrl', function ($scope, $http){
    var direction = document.getElementById("direction").innerHTML;
    $http.get(direction + "angular/items").then(function(response){
        $scope.itemsList = response.data;
    });
    /*
    $scope.getSelectedUser = function(){
        var userID = document.getElementById("readUser").value;
        $http.get("/angular/user/" + userID)
            .then(function(response){
                $scope.userGetData = response.data.userData;
            });
    };*/
});
