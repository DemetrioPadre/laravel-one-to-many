@extends('layouts.app')

@section('title', 'Lista Categorie')
@section('content')

    <section>
        <div class="container ">
            <h1 class="mb-4">Lista categorie</h1>
            <table class="table mb-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Etichetta</th>
                        <th>Colore</th>
                        <th>Badge </th>
                        <th></th>
                </thead>
                <tbody>
                    @forelse ($types as $type)
                    @empty
                        <tr>
                            <td colspan="100%">
                                <i>Nessun Risultato</i>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </section>

@endsection
