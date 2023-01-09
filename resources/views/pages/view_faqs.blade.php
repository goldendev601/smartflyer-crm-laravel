@extends('pages.layouts.app')

@section('content')
    <div class="dashboard-details dashboard-header padding-spacing">
        <div class="faq-dashboard-view trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
            <div class="title"> 
                <h1>Frequently Asked Question</h1>
            </div>
            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                <div class="faq_accordion common-background">
                    @if ($faqs->count() > 0)
                        <div class="accordion-container">
                            @foreach ($faqs as $faq)
                                <div class="set">
                                    <a href="#" class="faq-title">
                                        {{ $faq->question ?? '' }}
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="content">
                                        {!! nl2br($faq->answer) ?? '' !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="accordion-container">
                            Frequently Asked Question Not Found!
                        </div>
                    @endif
                </div>
            </ul>
        </div>
    </div>
@endsection
