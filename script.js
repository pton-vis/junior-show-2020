function goToExpandedState() {
  $('.window-neutral').hide();
  $('.window-expanded').show();
}

function goToNeutralState() {
  $('.window-neutral').show();
  $('.window-expanded').hide();
}

$(document).ready(function() {
  $('.p-button').click(function() {
    $('.window-neutral').toggle();
    $('.window-expanded').toggle();
    $('.p-list').toggle();
  });
});
