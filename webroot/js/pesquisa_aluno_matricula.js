$( document ).ready(function() {    
    $("#pesquisar-aluno-matricula").select2({
        ajax: {
            url: "get_aluno",
            dataType: 'json',
            delay: 250,
            data: function (params) {
            return {
                q: params.term, // search term
                page: params.page
            };
            },
            processResults: function (data, params) {
            var nomes = data.alunos.map( item => { return {id: item['id'], text: item['nome']}});
                        return {
                            results: nomes,
                        }
            },
            cache: true
        },
        placeholder: 'Buscar Aluno',
        minimumInputLength: 1
    });    
});