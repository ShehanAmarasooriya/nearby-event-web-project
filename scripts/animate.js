sal({
    threshold: 0.5,
    once: true,
});

$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        var $hero = $(".hero");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $hero.height()*0.6);
    });
});

$("#select-option").on("change", function() {
    if(this.value == "pick-date") {
        $("#select-option").css('display', 'none');
        
        $("#input-date").css('display', 'inline-block').animate({
            opacity: 1
        }, 250);
    }
  });

function selectType() {
    val = document.getElementById("eventtype").value;

    if (val == "closedEvent") {
        document.getElementById("participantsNo").disabled = false;
    } else {
        document.getElementById("participantsNo").disabled = true;
    }
}