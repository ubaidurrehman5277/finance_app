

  @extends('frontend.partials.main')
@push('title')
    <title>Home</title>
@endpush

@section('main-section')

    @include('frontend.pages.home.home')

@endsection

