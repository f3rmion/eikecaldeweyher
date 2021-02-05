@extends('layouts.app')

@section('content')
<div class="container mx-auto pl-4 lg:p-4 lg:p-0">

<!-- This component requires Tailwind CSS >= 1.5.1 and @tailwindcss/ui >= 0.4.0 -->
<div class="bg-white overflow-hidden">
  <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
    <div class="mx-auto text-base max-w-prose lg:max-w-none">
      <p class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">About</p>
      <h1 class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10 uppercase tracking-wide">Eike Caldeweyher</h1>
    </div>
    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
      <div class="relative mb-8 lg:mb-0 lg:row-start-1 lg:col-start-2">
        <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384">
          <defs>
            <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
        </svg>
        <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
          <figure>
            <div class="relative pb-7/12 lg:pb-0 mb-12">
              <img src="https://images.unsplash.com/photo-1542992709-62841325261d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2010&q=80" alt="" width="1184" height="1376" class="rounded-lg shadow-lg object-cover object-center absolute inset-0 w-full h-full lg:static lg:h-auto">
            </div>
          </figure>
          <figure>
            <div class="relative pb-7/12 lg:pb-0 mt-4">
              <img src="https://images.unsplash.com/photo-1513108500008-edfde4c0f59c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80" alt="" width="1184" height="1376" class="rounded-lg shadow-lg object-cover object-center absolute inset-0 w-full h-full lg:static lg:h-auto">
            </div>
            <figcaption class="flex mt-3 text-sm text-gray-500">
              <svg class="flex-none w-5 h-5 mr-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
              </svg>
              Photograph by Pia Nyström and Jonas Jacobsson
            </figcaption>
          </figure>
        </div>
      </div>
      <div>
        <div class="text-base max-w-prose mx-auto lg:max-w-none">
          <p class="text-lg leading-7 text-gray-500 mb-5">Postdoc fellow at <a href="https://www.astrazeneca.com/our-science/gothenburg.html">AstraZeneca R&D</a> in Gothenburg</p>
        </div>
        <div class="prose text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
          <ul>
            <li class="uppercase">Method Developer</li>
            <li class="uppercase">Computational Chemist</li>
            <li class="uppercase">Machine Learning Engineer</li>
          </ul>
		  <h2>Current Research</h2>
		  <p>Since September 2020, I work in the data science and modelling group of <a href="https://www.astrazeneca.com/our-company/our-people/anders-broo.html">Anders Broo</a> at AstraZeneca R&D in Gothenburg, Sweden. My supervisors are <a href="https://chemistry.nd.edu/people/per-ola-norrby/">Per-Ola Norrby</a> and <a href="https://www.astrazeneca.com/our-company/our-people/magnus-johansson.html">Magnus Johannson</a> and my main focus is on <b>data-driven discovery and prediction of reactivities</b> especially C-H bond activation.</p>
          <h2>How I came here</h2>
          <p>I received my Bachelor's and Master's degree from the Rheinische-Friedrich-Wilhelms Universität Bonn, Germany. During my Master's research, I started developing the <i>dftd4</i> method for treating London dispersion effects within density functional theory. After graduating in November 2016, I have been working for Stefan Grimme in the Mulliken center for theoretical chemistry where I obtained my PhD in April 2020.</p>
          <p>Most of the models I developed are accessible through different quantum chemical codes (see <a href="https://orcaforum.kofo.mpg.de/app.php/portal">ORCA</a>, <a href="https://www.turbomole.org/">TURBOMOLE</a>, <a href="https://www.vasp.at/">VASP</a>).</p>
		  <p>Code is available on Github: <a href="https://github.com/AstraZeneca/kallisto">kallisto</a>, <a href="https://github.com/dftd4/dftd4">dftd4</a>, <a href="https://github.com/grimme-lab/xtb">xtb</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

@endsection
