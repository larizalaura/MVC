$( document ).ready(function() {

    //Exemplo de Ajax puro
    // $('#pesquisar_aluno').change(function(){
    //     var dados = $(this).val();
    //     $.ajax({
    //         url: 'alunos/get_aluno',
    //         type: 'get',
    //         dataType: "json",
    //         async: true,
    //         data:
    //             {parametro:dados}
    //             ,
    //         success: function(res) {
    //          console.log(res);
    //          alert('Sucesso');
    //         }
    //     });
    // });
    
  
    $("#pesquisar-aluno").select2({
        ajax: {
            url: "alunos/get_aluno",
            dataType: 'json',
            delay: 250,
            data: function (params) {
            return {
                q: params.term, // search term
                page: params.page
            };
            },
            processResults: function (data, params) {
            var nomes = data.matriculados.map( item => { return {id: item['id'], text: item['nome']}});
                        return {
                            results: nomes,
                        }
            },
            cache: true
        },
        placeholder: 'Buscar Aluno',
        minimumInputLength: 2
    });    
});