$( "#welcome" ).on("click", function() {
    $( "#dropit" ).fadeToggle(function() {
      console.log(" Animation complete.");
    });
  });