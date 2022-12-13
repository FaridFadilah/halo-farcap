<x-app-layout>
  <x-slot:content>
    <section id="hero">
        <div class="container">
        <div class="content">
            <p>Using basic skills you can improve your business stuff with Around</p>
            <h1>One Dashboard to Manage all Your businesses</h1>
            <div class="getting-started">
            <form>
                <input type="text" placeholder="put your email...">
                <a href="#" type="button">Try for free</a>
            </form>
            </div>
            <img src="{{ asset("img/Dashboard.png") }}" alt="">
        </div>
        </div>
    </section>
  </x-slot>
</x-app-layout>