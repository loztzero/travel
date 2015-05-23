@extends('layouts.frontangular')
@section('content')
<div class="row" ng-controller="MainCtrl">

<h1>Pendaftaran Berhasil</h1>
<h2>Terima Kasih</h2>
<a href="../main/login">Klik Disini Untuk masuk ke halaman Login</a>
</div>
@stop

@section('script')
<script>
var app = angular.module("ui.boardingpassku", ['ngSanitize']);
app.controller("MainCtrl", function ($scope, $http, $filter) {
});
</script>
@stop