(function ($) {
  $(function () {
    $(".sidenav").sidenav();
    $(".parallax").parallax();
  }); // end of document ready
})(jQuery); // end of jQuery name space

function allcheck(tf) {
  var ElementsCount = document.makepage.elements.length;
  for (i = 0; i < ElementsCount; i++) {
    document.makepage.elements[i].checked = tf;
  }
}

function showURL() {
  check1 = document.getElementById("cloud1");
  check2 = document.getElementById("cloud2");
  check3 = document.getElementById("cloud3");
  check4 = document.getElementById("cloud4");
  check5 = document.getElementById("cloud5");
  check6 = document.getElementById("cloud6");
  check7 = document.getElementById("cloud7");
  check8 = document.getElementById("cloud8");
  check9 = document.getElementById("cloud9");
  check10 = document.getElementById("cloud10");
  check11 = document.getElementById("cloud11");
  check0 = document.getElementById("cloud0");
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
    document.getElementById("ondf").style.display = "";
  } else {
    document.getElementById("ondf").style.display = "none";
  }

  if (check4.checked) {
    document.getElementById("medf").style.display = "";
  } else {
    document.getElementById("medf").style.display = "none";
  }

  if (check5.checked) {
    document.getElementById("dropf").style.display = "";
  } else {
    document.getElementById("dropf").style.display = "none";
  }

  if (check6.checked) {
    document.getElementById("boxf").style.display = "";
  } else {
    document.getElementById("boxf").style.display = "none";
  }

  if (check7.checked) {
    document.getElementById("icef").style.display = "";
  } else {
    document.getElementById("icef").style.display = "none";
  }

  if (check8.checked) {
    document.getElementById("mailf").style.display = "";
  } else {
    document.getElementById("mailf").style.display = "none";
  }

  if (check9.checked) {
    document.getElementById("pclf").style.display = "";
  } else {
    document.getElementById("pclf").style.display = "none";
  }

  if (check10.checked) {
    document.getElementById("sycf").style.display = "";
  } else {
    document.getElementById("sycf").style.display = "none";
  }

  if (check11.checked) {
    document.getElementById("ynxf").style.display = "";
  } else {
    document.getElementById("ynxf").style.display = "none";
  }

  if (check0.checked) {
    document.getElementById("drcf").style.display = "";
  } else {
    document.getElementById("drcf").style.display = "none";
  }
}
window.onload = showURL;
