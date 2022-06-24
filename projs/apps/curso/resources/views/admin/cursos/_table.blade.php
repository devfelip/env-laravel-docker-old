<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Publicado</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registros as $registro)
            <tr>
                <td>{{ $registro->id }}</td>
                <td>{{ $registro->titulo }}</td>
                <td>{{ $registro->descricao }}</td>
                <td><img height="60" src="{{ asset($registro->imagem) }}"
                        alt="{{ asset($registro->titulo) }}"></td>
                <!-- Asset traz já de forma correta o caminho da pasta public -->
                <td>{{ $registro->publicado }}</td>
                <td>
                    <a class="btn deep-orange"
                        href="{{ route('admin.cursos.editar', $registro->id) }}">Editar</a>
                    <a class="btn red btnDeletar"
                        href="" onclick="excluir_curso({{ $registro->id }})">Deletar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>