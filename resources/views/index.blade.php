@extends('app')

@section('titulo', 'Página Inicial')

@section('conteudo')
<h1>Lista de diaristas</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($diaristas as $diarista)
            <tr>
                <th scope="row">{{ $diarista->id }}</th>
                <td>{{ $diarista->nome_completo }}</td>
                <td>{{ $diarista->cpf }}</td>
                <td>{{ $diarista->email }}</td>
                <td>{{ $diarista->telefone }}</td>
                <td>{{ $diarista->cidade }}</td>
                <td>{{ $diarista->estado }}</td>
                <td>
                    <a href="{{ route('diaristas.edit', $diarista) }}" class="btn btn-primary">Atualizar</a>
                    <a href="{{ route('diaristas.destroy', $diarista) }}" class="btn btn-danger" onclick="return confirm('Deseja realmente apagar?')">Apagar</a>
                </>
            </tr>
        @empty
        <tr>
            <th></th>
                <td>Nenhum registro cadastrado</td>
                <td></td>
                <td></td>
        </tr>
        @endforelse
    </tbody>
</table>
<a href="{{ route('diaristas.create') }}" class="btn btn-success">Nova Diarista</a>
@endsection
