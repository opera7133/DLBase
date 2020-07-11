(function ($) {
  $(function () {
    $(".sidenav").sidenav();
    $(".parallax").parallax();
  }); // end of document ready
})(jQuery); // end of jQuery name space

function showURL() {
  check1 = document.getElementById("cloud1");
  check2 = document.getElementById("cloud2");
  check3 = document.getElementById("cloud3");
  check4 = document.getElementById("cloud4");
  check5 = document.getElementById("cloud5");
  check6 = document.getElementById("cloud6");
  if (check1.checked) {
    document.getElementById("megaf").style.display = "";
  } else {
    document.getElementById("megaf").style.display = "none";
  }

  if (check2.checked) {
    document.getElementById("gdf").style.display = "";
  } else {
    document.getElementById("gdf").style.display = "none";
  }

  if (check3.checked) {
    document.getElementById("medf").style.display = "";
  } else {
    document.getElementById("medf").style.display = "none";
  }

  if (check4.checked) {
    document.getElementById("dropf").style.display = "";
  } else {
    document.getElementById("dropf").style.display = "none";
  }

  if (check5.checked) {
    document.getElementById("boxf").style.display = "";
  } else {
    document.getElementById("boxf").style.display = "none";
  }

  if (check6.checked) {
    document.getElementById("drcf").style.display = "";
  } else {
    document.getElementById("drcf").style.display = "none";
  }
}
window.onload = showURL;
