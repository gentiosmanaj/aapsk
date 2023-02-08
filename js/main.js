jQuery(document).ready(function () {
  jQuery("#home-slider").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  jQuery(".main-navigation ul li.menu-item-has-children")
    .not(".main-navigation ul li ul li.menu-item-has-children")
    .append(
      '<button class="sub-menu-toggler"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#245285" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>'
    );
  jQuery(".main-navigation ul li ul li.menu-item-has-children").append(
    '<button class="last-sub-menu-toggler"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#245285" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>'
  );

  jQuery(".on-hover-img").hover;

  jQuery(".on-hover-img").html(jQuery(this).attr("value")).fadeIn();

  jQuery(".on-hover-img").hover(
    function () {
      const attr = jQuery(this).attr("imgsource");
      jQuery(".post-thumbnail img").attr("src", attr);
    },
    function () {
      jQuery(".post-thumbnail img").attr(
        "src",
        jQuery(".post-thumbnail img").attr("default")
      );
    }
  );

  const defaultImage = jQuery(".posts-wrapper .post-description a").attr(
    "imgsource"
  );
  jQuery(".post-thumbnail img").attr("src", defaultImage);
  jQuery(".post-thumbnail img").attr("default", defaultImage);

  jQuery(".single-gallery-image > .thumbnail > a").featherlightGallery({
    variant: "featherlight-gallery2",
  });

  jQuery(".site-footer .widget a").click(function () {
    window.open(this.href);
    return false;
  });

  jQuery.featherlightGallery.prototype.afterContent = function () {
    var caption = this.$currentTarget.find("img").attr("alt");
    this.$instance.find(".caption").remove();
    $('<div class="caption">')
      .text(caption)
      .appendTo(this.$instance.find(".featherlight-content"));
  };

  jQuery(".hamburger").click(function () {
    jQuery(this).toggleClass("is-active");
    $(".main-navigation").toggleClass("toggled");
  });

  $(".number-count").each(function () {
    $(this)
      .prop("Counter", 0)
      .animate(
        {
          Counter: $(this).text(),
        },
        {
          duration: 3000,
          easing: "swing",
          step: function (now) {
            $(this).text(Math.ceil(now));
          },
        }
      );
  });

  jQuery(".sub-menu-toggler").click(function () {
    jQuery(this).toggleClass("toggled");
    jQuery(".main-navigation ul li.menu-item-has-children")
      .not(".main-navigation ul li ul li.menu-item-has-children")
      .toggleClass("focus")
      .siblings()
      .removeClass("focus");
  });
  jQuery(".last-sub-menu-toggler").click(function () {
    jQuery(this).toggleClass("toggled");
    jQuery(this)
      .parent("li")
      .toggleClass("focus")
      .siblings()
      .removeClass("focus");
  });
});
