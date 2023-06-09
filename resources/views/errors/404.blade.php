@extends('user.master')

@section('title')
    Error Page
@endsection

@section('css')
@endsection
@section('content')

    <main>
        <!-- content-error-area -->
        <div class="content-error-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="content-error-item text-center">
                            <div class="error-thumb">
                                <img src="{{ asset('assets/user/img/bg/error-thumb.png')}}" alt="image not found">
                            </div>
                            <div class="section-title">
                                <h2 class="mb-20">Oops! That page can't be found.</h2>
                                <p>We couldn't find any results for your search. Use more generic words or double check your
                                    spelling.</p>
                            </div>
                            <div class="error-btn">
                                <a class="edu-btn" href="{{URL('main_page')}}">Back to homepage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-error-end -->
    </main>
@endsection





@section('js')



@endsection


