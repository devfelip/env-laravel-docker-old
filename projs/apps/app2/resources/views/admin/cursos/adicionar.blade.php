@extends('layout.site')
<!-- Extende um tema existente para utilização de suas variáveis -->
@section('titulo', 'Cursos')
<!-- Altera o valor de uma váriavel -->

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Curso</h3>
        <div class="row">
            <form action="javascript:void(0)" method="post" id="frm-create-post" enctype="multipart/form-data">
                <!-- Enctype é obrigatório quando for subir algum arquivo no sistema -->
                
                @include('admin.cursos._form')
                <button class="btn deep-orange" type="submit" id="submit-post">Salvar</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#frm-create-post").validate({

        submitHandler: function() {
            var titulo = $("#titulo").val();
            var descricao = $("#descricao").val();
            var valor = $("#valor").val();
            var imagem = $("#imagem").val();
            var publicado = $("#publicado").val();

            // processing ajax request    
            $.ajax({
                url: "{{ route('admin.cursos.salvar') }}",
                type: 'POST',
                dataType: "json",
                data: {
                    titulo: titulo,
                    descricao: descricao,
                    valor: valor,
                    imagem: '123.jpg',
                    publicado: 'sim'
                },
                success: function(data) {
                    // log response into console
                    console.log(data);
                }
            });
        }
    });
    </script>

@endsection
