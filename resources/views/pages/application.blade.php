@extends('layouts.app')
@section('content')

<script src="//unpkg.com/alpinejs" defer></script>
 <livewire:job-application-form :jobId="$jobId" />


@endsection
