<!DOCTYPE html>

<html lang="en">
  

    <head>
        {{-- Include meta Section  --}}
        @include('frontend.layout.partials.meta')

        <title>Flourish Store - Mushahedur</title>

        {{-- Include style CSS Section  --}}
        @include('frontend.layout.partials.style')


    </head>

  <body>
    <div class="header--sidebar"></div>
        <!--  Header-->
        {{-- Include Header Section  --}}
        @include('frontend.layout.partials.header')

        <!--  Extaind main Containt-->
        @yield('containt')      

        {{-- Include Footer Section  --}}
        @include('frontend.layout.partials.footer')


    <div class="ps-loading"><div class="loader ">
        <div class="loader__item"></div>
        <div class="loader__item"></div>
        <div class="loader__item"></div>
        <div class="loader__item"></div>
        <div class="loader__item"></div>
    </div>
    </div>


    {{-- Include Script Section  --}}
    @include('frontend.layout.partials.script')

  </body>


</html>