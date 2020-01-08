<div class="flex justify-center items-center">
  <main class="container mt-4">
    <section class="flex flex-col bg-gray-100 md:flex-row shadow-lg p-4 md:p-6 lg:p-8">
      <div class="font-mono">
        {{-- <h1 class="font-sans text-3xl text-gray-700">Hi!</h1>
        <p class="font-mono">I'm Ian Hilt and I'm a full stack developer.</p>
        <p class="font-mono">Stay tuned as I'll be updating this site in the near future.</p>
        <p class="font-mono">In the meantime, you can get in touch <a href="https://sc-techservices.com/contact-us/" class="underline">here</a>
        or <a href="https://twitter.com/ianhilt" class="underline">here</a>.</p> --}}
        @php the_content() @endphp
      </div>
    </section>
  </main>
</div>
