var app =angular.module('jsbin', []);

app.controller('DemoCtrl',[ function($http) {
  
  var vm = this;
   var temp1=[];
    var URL = 'http://api.openweathermap.org/data/2.5/forecast/daily';
  var request = {
    method: 'GET',
    url: URL,
    params: {
       q: 'KansasCity',
      mode: 'json',
      units: 'imperial',
      cnt: '7',
      appid: '3ac1f68b653ffbf72a5f782420062771'
    }
  };
   
 $http(request)
    .then(function(response) {
   vm.data = response.data;
      temp1[0]= angular.fromJson(response.data); 
       console.log(temp1[0]); 
     console.log(temp1[0].city.name); 
     console.log(temp1[0].city.country);
       console.log(temp1[0].list[0].temp.day);
       }).
    catch(function(response) {
      vm.data = response.data;
    });
}

]);