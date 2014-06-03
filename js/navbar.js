

/**
 *    Updates the navbar, setting the currently active
 *    section based on the pages URL.
 */
function updateActiveNavbar(){

  var url = window.location.pathname;
  var activePage = stripTrailingSlash(url);

  $('.nav li a').each(function(){
    var currentPage = stripTrailingSlash($(this).attr('href'));

    if (site_url+activePage == currentPage) {
      $(this).parent().addClass('active');
    }
  });
}




/**
 * strips the last slash of a given string
 */
function stripTrailingSlash(str) {
  if(str.substr(-1) == '/') {
    return str.substr(0, str.length - 1);
  }
  return str;
}
