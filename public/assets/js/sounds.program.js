$(document).ready(function () {
  // const episodesLength = $(".episode-item").length;
  // $(".available").html(`(${episodesLength} Available)`);
  function initialWidth() {
    $("section.headline > .headline-background").height(
      $("section.headline > .headline-data").height()
    );

    if (window.screen.width === 360) {
      $(".grid-option-container").addClass("hidden");
      const episodesContainer = $(
        "section.episodes-section > .episodes-container"
      );
      episodesContainer.removeClass("grid-3");
      episodesContainer.removeClass("grid-list");
      episodesContainer.addClass("grid-list");
      $(".episode-item > .data > .summ").addClass("hidden");
      $(".episode-item > .data > .duration-release").removeClass("hidden");
    } else {
      $(".grid-option-container").removeClass("hidden");
      $(".grid-option-container > button").each(function () {
        if (this.classList.contains("grid-list")) {
          $(".grid-option-container > button").btnActive = this;
          this.classList.add("active");
        }
      });
    }
  }

  initialWidth();
  $(window).resize(() => {
    $(".grid-option-container > button").removeClass("active");
    $(".grid-option-container > button").removeClass("hover");
    setTimeout(() => {
      const heightP = $(".cover > img").outerHeight();
      const widthP = $(".cover > img").outerWidth();
      $(".gel").innerHeight(heightP);
      $(".gel").innerWidth(widthP);
    }, 410);
    initialWidth();
  });

  const gridOptionBtn = $(".grid-option-container > button");

  gridOptionBtn.each(function () {
    const btnActive =
      this.classList.contains("active") === true ? this : undefined;
    gridOptionBtn.btnActive = btnActive;
  });

  gridOptionBtn.on("mouseleave", function () {
    gridOptionBtn.removeClass("hover");
    $(gridOptionBtn.btnActive).addClass("active");
  });

  gridOptionBtn.on("mouseenter", function () {
    gridOptionBtn.removeClass("active");
    $(this).addClass("hover");
  });

  gridOptionBtn.on("mouseup", function () {
    setTimeout(() => {
      const heightP = $(".cover > img").outerHeight();
      const widthP = $(".cover > img").outerWidth();
      $(".gel").innerHeight(heightP);
      $(".gel").innerWidth(widthP);
    }, 400);

    function setActive(element) {
      $(element).addClass("active");
    }

    gridOptionBtn.removeClass("active");
    setActive(this);
    gridOptionBtn.btnActive = this;
    const episodesContainer = $(
      "section.episodes-section > .episodes-container"
    );
    episodesContainer.removeClass("grid-3");
    episodesContainer.removeClass("grid-list");
    if (this.dataset.grid === "list") {
      episodesContainer.addClass("grid-list");
      $(".episode-item > .data > .duration-release").removeClass("hidden");
    } else if (this.dataset.grid === "tColoumns") {
      episodesContainer.addClass("grid-3");
      $(".episode-item > .data > .summ").addClass("hidden");
      $(".episode-item > .data > .duration-release").addClass("hidden");
    }
  });
});
