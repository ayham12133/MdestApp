
@extends('layouts.header')
    <!-- Main Content -->
    @section('Sections')
    <main>
        <!-- First Section -->
        @include('sections.firstSection')

        <!-- Second Section -->
         @include('sections.secondSection')

         <!-- Thired Section -->
         @include('sections.thiredSection')
    </main>

    @endsection
