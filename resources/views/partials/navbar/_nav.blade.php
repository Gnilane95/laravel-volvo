<nav class="flex justify-between items-center p-5">
    {{-- logo --}}
    <div class="">
        <a href="/">
           <img src="img/1.svg" alt="logo volvo"> 
        </a>
        
    </div>

    {{-- nav-item --}}
    <div class="space-x-5">
        <a href="/offre-du-moment" class="hover:underline hover:underline-offset-8 font-bold">Offres du moment</a>
        <a href="{{ route('show') }}" class="hover:underline hover:underline-offset-8 font-bold">Nos voitures</a>
    </div>
</nav>