$( document ).ready(function() {

    //Exemplo de Ajax puro
    $('#teste_id').change(function(){
        var dados = $(this).val();
        $.ajax({
            url: 'get_matriculado',
            type: 'post',
            dataType: "json",
            async: true,
            data:
                {parametro:dados}
                ,
            success: function(res) {
             console.log(res);
             alert('Sucesso');
            }
        });
    });
    
  
});