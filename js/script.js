jQuery(document).ready(function($)
{
  $("header div.toggle").click(function()
  {
      $(this).toggleClass("open");
      $("header div.main-menu").toggleClass("open");
  });


  var urlParams = new URLSearchParams(window.location.search);
  var cat = urlParams.get('cat');

  if (cat) {
    var filterListItem = $(".block.filter-speakers li[data-filter='" + cat + "']");
    filterListItem.addClass("active");
    runFilter();
  }

  $(".block.filter-speakers li").on("click", function() {
    $(this).toggleClass("active");
    runFilter();
  });

  $(".block.filter-speakers li").attr("tabindex", "0"); // Make filter list items focusable

  $(".block.filter-speakers li").on("keydown", function(e) {
    if (e.which === 13 || e.keyCode === 13) {
      $(this).toggleClass("active");
      runFilter();
      return false; // Prevent default behavior of Enter key
    }
  });

  function runFilter() {
    var selectedFilters = [];

    // Get the selected filters
    $(".block.filter-speakers li.active").each(function() {
      selectedFilters.push($(this).data("filter"));
    });

    // Show/hide the speakers based on the selected filters
    if (selectedFilters.length > 0) {
      $(".block.list-speakers a").addClass("hidden"); // Hide all speakers
      $(".block.list-speakers a").each(function() {
        var speakerFilters = $(this).data("filter").split(" ");
        var matches = selectedFilters.filter(function(filter) {
          return speakerFilters.includes(filter);
        });
        if (matches.length > 0) {
          $(this).removeClass("hidden"); // Show the speaker
        }
      });
    } else {
      $(".block.list-speakers a").removeClass("hidden"); // Show all speakers
    }
  }


  function toggleCardActiveState(cardId) {
      const card = $(`[data-id="${cardId}"]`);
      card.toggleClass("active");
      
      
      const isActive = card.hasClass("active");
      localStorage.setItem(cardId, isActive);
  }

  $("div.card button.checkbox").on("click", function() {
      const cardId = $(this).parent().attr("data-id");
      toggleCardActiveState(cardId);
  });

  $("div.program div.card").each(function() {
      const cardId = $(this).attr("data-id");
      const isActive = localStorage.getItem(cardId);
      if (isActive === "true") {
        $(this).addClass("active");
      }
  });


  $('.filter-program').on('click', function() {
    const button = $(this);
    const isActive = button.hasClass('active');
    
    
    button.toggleClass('active');

    
    if (!isActive) {
      $('.card').removeClass('not-in-list');
    }
    
    
    $('.card').each(function() {
      const cardId = $(this).attr('data-id');
      const card = $(this);
      const isCardActive = localStorage.getItem(cardId) === 'true';
      
      if (isActive && !isCardActive) {
        card.addClass('not-in-list'); 
      } else {
        card.removeClass('not-in-list');
      }
    });
  });


  $('div.single-speaker div.add-talk button').each(function() {
    const talkId = $(this).attr('data-id');
    const isActive = localStorage.getItem(talkId) === 'true';
    
  
    $(this).toggleClass('active', isActive);
    $(this).text(isActive ? 'Remove talk from my list' : 'Add talk to my list');
    
 
    $('.card[data-id="' + talkId + '"]').toggleClass('not-in-list', !isActive);
  });
  
  $('div.single-speaker div.add-talk button').on('click', function() {
    const talkId = $(this).attr('data-id');
    const isActive = localStorage.getItem(talkId) === 'true';

    localStorage.setItem(talkId, !isActive);
    
  
    $('.card[data-id="' + talkId + '"]').toggleClass('active', !isActive);
    $('.card[data-id="' + talkId + '"]').toggleClass('not-in-list', isActive);
    

    $(this).toggleClass('active', !isActive);
    $(this).text(!isActive ? 'Remove talk from my list' : 'Add talk to my list');
  });
  
  $('.filter-program').on('click', function() {
    $(this).toggleClass('active');
    

    if ($(this).hasClass('active')) {
      $('.card').not('.active').addClass('not-in-list');
    } else {
      $('.card').removeClass('not-in-list');
    }
  });
  
  $('.filter-program').on('click', function() {
    $(this).toggleClass('active');
    

    if ($(this).hasClass('active')) {
      $('.card').not('.active').addClass('not-in-list');
    } else {
      $('.card').removeClass('not-in-list');
    }
  });

  
      

});