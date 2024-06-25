
//services links categroies
$(function() {
	var url = window.location;
	// Will only work if string in href matches with location
	$('.at-categories .blog-cat a[href="' + url + '"]').parent().removeClass('active');
  
	// Will also work for relative and absolute  hrefs
	$('.at-categories .blog-cat a').filter(function() {
		return this.href == url;
	}).parent().addClass('active');   
	// $(this).addClass('active');
})   