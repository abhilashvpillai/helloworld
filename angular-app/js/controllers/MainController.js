app.controller('MainController',['$scope',function($scope){
  	$scope.title='My First Angular App';
  	$scope.promo='Promo Code';
	$scope.products=[{
    name: 'The Book of Trees',
    price: 19,
    pubdate: new Date('2014','03','08'),
    cover: 'img/the-book-of-trees.jpg',
    likes:0
  }, { 
    name: 'Program or be Programmed', 
    price: 8, 
    pubdate: new Date('2013', '08', '01'), 
    cover: 'img/program-or-be-programmed.jpg',
    likes:0
  }, {
    name: 'Unconscious Slaves',
    price: 32,
    pubdate: new Date('2016','05','01'),
    cover: 'http://www.readthespirit.com/bookstore/wp-content/uploads/sites/5/2012/10/A-Cute-Leukemia-front-cover-book-page.jpg',
    likes:0
  }, {
    name: 'Unwanted Freedom',
    price: 13,
    pubdate: new Date('2016','02','01'),
    cover: 'http://www.readthespirit.com/bookstore/wp-content/uploads/sites/5/2012/08/Our-Lend-front-cover-info.jpg',
    likes:0
  }];
  $scope.plusOne = function(index) {
    $scope.products[index].likes+=1;
  };
}]);
