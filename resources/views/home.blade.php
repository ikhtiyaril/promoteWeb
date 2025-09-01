<x-layout>
  
     <x-header-home></x-header-home>
     <x-problem></x-problem>
     <x-solve></x-solve>
     <x-profile :experience="$experience"></x-profile>
     <x-portofolio-view :portofolio="$portofolio"></x-portofolio-view>
     {{-- <x-why-choose></x-why-choose> --}}
     
    <x-pricing :pricing="$pricing"></x-pricing>
    <x-discount :discount="$discount"></x-discount>
</x-layout>