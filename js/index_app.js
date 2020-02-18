setInterval("goFlash()",9000);

function goFlash() {
    $('.keybox').addClass('vertical_sec');
    setTimeout("removeFlash()",500);
}

function removeFlash() {
    $('.keybox').removeClass('vertical_sec');
}

//吹き出しの記述　クエリですが//
$(function () {
  $('.key').hover(function() {
    $(this).next('p').show();
  }, function(){
    $(this).next('p').hide();
  });
});


function add_flash(){
	var ww = $(window).width();
	if(ww < 400){
		$('.icon').addClass('flash');
	}
}

var userAgent = window.navigator.userAgent;
console.log( userAgent );


//PC版Chrome,opera,edgeへのでなえれば
//   var key = document.getElementById('key');
//   var key_sec = document.getElementById('key_2');
  
//     key.classList.add('display_none');
//     key_sec.classList.remove('display_none');



//   if (key != ''){
//     console.log( key );
// }else{
//   console.log('取れてないで〜');
// } 

var key = document.getElementById('key');
var key_sec = document.getElementById('key_2');
console.log(key_2);
var userAgent = window.navigator.userAgent.toLowerCase();

if(userAgent.indexOf('chrome') != -1 ) {
  
  key_2.classList.remove('display_none');
  console.log('クローム ');

}else{

  console.log('指定先違う');

}

// || userAgent.indexOf('chrome') != -1 || userAgent.indexOf('opera') != -1 

