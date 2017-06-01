
function LogearEmpleado()
{
  $.ajax({
    url: 'Empleados.php',
    type: 'POST',
    data: $("#form").serialize()+"&op=login",
    success: function(data)
    {
      $("#resp").html(data);
    }
  })
  .done(function() {
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
}
