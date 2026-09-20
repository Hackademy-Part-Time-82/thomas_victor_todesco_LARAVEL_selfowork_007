<x-layout>
    <x-navbar />

    <section class="container-lg mt-5">

        <div class="row justify-content-center">
            <article class="col-lg-6">
                <h3 class="text-center">Registra i dati del tuo libro</h3>
            </article>
        </div>



        <div class="row justify-content-lg-center align-items-lg-center mt-4">
            <div class="col-12 col-lg-5">
                {{-- --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                {{-- --}}

                {{-- inizio form --}}
                <form action="{{ route('store_book') }}" method="POST">

                    @csrf

                    <label class="col-lg-1 gap-3 me-1" for="name">Titolo</label>
                    <input class="col-lg-10 mb-2" type="text" placeholder="Titolo del libro" name="name"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            Il nome del libro è obbligatorio </div>
                    @enderror

                    <label class="col-lg-1 gap-3 me-1" for="year">Anno</label>
                    <input class="col-lg-10 mb-2" type="number" placeholder="Anno di pubblicazione" name="year"
                        value="{{ old('year') }}">

                    <label class="col-lg-1 gap-3 me-1" for="pages">Pagine</label>
                    <input class="col-lg-10 mb-2" type="number" placeholder="Numero di pagine" name="pages"
                        value="{{ old('pages') }}">

                    <div class="row justify-content-center">
                        <div class="col-lg-12 d-flex justify-content-around">
                            <button class="btn btn-success" type="submit">INVIA</button>
                            <button class="btn btn-danger" type="reset">RESET CAMPI</button>
                        </div>
                    </div>
                </form>
                {{-- fine form --}}
            </div>

        </div>


    </section>


</x-layout>
