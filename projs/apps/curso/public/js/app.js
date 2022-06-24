function update_table(){
    $.ajax({
        url: "/admin/cursos/_table",
        type: "GET",
        dataType: "HTML",
        success: function(data) {
            console.log(data);
            $("#dados").html(data);
        }
    });
}
function excluir_curso(id){
    event.preventDefault();
    resp = confirm("Deseja realmente excluir o curso?");
    if(resp){
        $.ajax({
            url: "/admin/cursos/deletar/"+id,
            type: "GET",
            dataType: "HTML",
            success: function(data) {
                console.log(data);
                console.log('excluido');
                update_table();
            }
        });
    }
}