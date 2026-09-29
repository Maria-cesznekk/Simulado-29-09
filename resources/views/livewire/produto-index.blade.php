<div>
    <table calss="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>quantidade</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->quantidade }}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
</div>