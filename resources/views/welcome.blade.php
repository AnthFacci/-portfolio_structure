@extends('layouts.main')

@section('title', 'Home')

@section('content')
<h1 class="flex justify-center text-[65px] pt-[170px] color" id="animationH1">Anthony Faccioli</h1>
<p class="flex justify-center text-[19px] subClassColor">Software engineer, Student & Front-end Developer </p>
<div class="w-10 flex flex-col justify-center gap-2 items-center h-1/4 icons absolute left-[65px] bottom-[40px] ">
    <a href="" class="flex justify-center fixed bottom-[266px] btnAbsol rounded-full border-0"><img src="{{ asset('img/github.png') }}" alt="iconGIT" id="icons"></a>
    <a href="" class="flex justify-center fixed bottom-[226px] btnAbsol"><img src="{{ asset('img/instagram.png') }}" alt="iconIG" id="iconsIG"></a>
    <a href="" class="flex justify-center  fixed bottom-[186px] btnAbsol"><img src="{{ asset('img/e-mail.png') }}" alt="iconGmail" id="iconsGM"></a>
    <a href="" class="flex justify-center  fixed bottom-[146px] btnAbsol"><img src="{{ asset('img/linkedin.png') }}" alt="iconGmail" id="iconsLK"></a>
    <hr class="h-[118px] w-[8px] bg-[#010225] fixed bottom-[0px] border-2 border-[#595266] rounded-t-lg">
</div>
<div class="pt-12 ">
    <button class="p-4 rounded-lg color btnProject item">MORE PROJECTS</button>
</div>
@endsection