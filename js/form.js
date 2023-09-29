$(document).ready(function(){
  $('#date-form').mask('00/00/0000');
  $('#Telefone').mask('(00) 00000-0000');
  $('#Telefonebottom').mask('(00) 00000-0000');
});

$("input[name='Tipo']").on("click", function(){
    $(".template").toggle(this.value === "Entregador" && this.checked);
});
