    <script>
      jQuery(document).ready(function(e) {
        var t, a, n, o = e("<ol></ol>").addClass("toc");
        e("h2").each(function() {
          var r = e(this).text().replace(/[^a-zA-Z0-9 ]/g, "").replace(/\s/g, "-").toLowerCase();
          e(this).attr("id", r), t = e(this), a = t.text(), n = "#" + t.attr("id"), newLine = "<li><a href='" + n + "'>" + a + "</a></li>", o.append(newLine)
        }), document.querySelectorAll("h2").length > 0 && e(".page_content").prepend(o), o.find("a").on("click", function() {
          var t = e(this).attr("href");
          return e("html, body").animate({
            scrollTop: e(t).offset().top
          }, 500), !1
        }), e(".toc").prepend("<div class='toc_dropdown'><img src='<?php echo get_template_directory_uri() . '/images/icons/plus_icon_blue.png' ?>'></div>"), e(".toc").prepend("<h5>Table of Contents</h5>")
      });
    </script>