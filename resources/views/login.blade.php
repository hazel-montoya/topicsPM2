<x-layout>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <h1 class="font-mono, text-xl">Log In</h1>
    <div>
        <form action="/login" method="POST">
            @csrf
        <x-input title="Email" type="text" nombre="email"/>
        @error('email')
        <p>{{$message}}</p>
      @enderror
    </div>
    <div>
        <x-input title="Password" type="password" nombre="password"/>
        @error('password')
        <p>{{$message}}</p>
      @enderror
    </div>
    <button type="submit" class="text 2xl">Log In</button>
        </form>
    </x-layout>

