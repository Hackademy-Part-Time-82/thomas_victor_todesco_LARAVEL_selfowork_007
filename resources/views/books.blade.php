<x-layout>
    
    <x-navbar/>
    
    <section class="container-lg mt-5">
        <div class="row justify-content-center">
            
            <div class="col-lg-7 mb-3">
                <div class="container text-center">
                    <div class="row">
                        <div class="col border border-black">
                            Nome
                        </div>
                        <div class="col border border-black">
                            Anno
                        </div>
                        <div class="col border border-black">
                            Pagine
                        </div>
                    </div>
                </div>
            </div>
            
            @foreach ($books as $book )

            <div class="col-lg-7 ">
                <div class="container text-center border border-black">
                    <div class="row">
                        <div class="col border border-black">
                            {{ $book['name'] }}
                        </div>
                        <div class="col border border-black">
                            {{ $book->year }}
                        </div>
                        <div class="col border border-black">
                            {{ $book['pages'] }}
                        </div>
                    </div>
                </div>
            </div>
            
            
            @endforeach
            
            
            
        </div>
    </section>
    
    
</x-layout>

