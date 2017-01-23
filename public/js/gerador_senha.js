$(document).ready(function() 
{

  $('#bt_gerar_senha').click(function() 
  {
    gerar_senha();
  });

});


function gerar_senha()
{
  $.ajax({
    url: 'gerador_senha.php',
    data: { token: csrfToken, acao: "gerar_senha", txt_tamanho: $('#txt_tamanho').val(), txt_quantidade: $('#txt_quantidade').val(), ckb_maiusculas: $('#ckb_maiusculas').is(':checked'), ckb_minusculas: $('#ckb_minusculas').is(':checked'), ckb_numeros: $('#ckb_numeros').is(':checked'), ckb_especiais: $('#ckb_especiais').is(':checked') },
    method: "post",
    success: function(data) {
      $('#area_resposta').show().delay(250);
      $('#senha_cliente').slideDown('slow', function() 
      {
        $('#senha_cliente').val(data);
      })
    }
  });
}
