

  $("input:radio").click(function() {
    var val = $(this).val();
    $(this).siblings("input:radio").attr("disabled","disabled"); 
    $("input:radio[value='" + val + "']").not(this).attr("disabled","disabled"); 
});