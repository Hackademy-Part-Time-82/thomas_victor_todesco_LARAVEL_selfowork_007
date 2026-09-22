<x-layout title="Catalogo — Biblioteca Lumen">
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <p class="text-uppercase small text-secondary mb-1 page-heading">Collezione</p>
                <h1 class="h2 mb-4">Catalogo dei libri</h1>

                <div class="card card-lumen">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Titolo</th>
                                    <th scope="col">Anno</th>
                                    <th scope="col">Pagine</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($books as $book)
                                    <tr>
                                        <td class="fw-medium">{{ $book->name }}</td>
                                        <td>{{ $book->year }}</td>
                                        <td>{{ $book->pages }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center text-secondary py-5">
                                            Nessun libro in archivio. Registrane uno dal modulo di inserimento.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-4">
                    <a class="btn btn-lumen" href="{{ route('register_your_book') }}">Registra un libro</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
