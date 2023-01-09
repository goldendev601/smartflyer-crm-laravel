@extends('pages.layouts.app')

@section('content')
<div class="dashboard-details dashboard-header padding-spacing">
    <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
        <h1>Partners</h1>
        <ul class="d-flex flex-wrap justify-content-flex-end m-600">
        </ul>
    </div>
    <div class="clients-tab-section">
        <div class="clients-tab d-flex flex-wrap justify-content-space-between">
            <ul class="tabs to-do-tab d-flex flex-wrap">
                <li class="active" rel="tab1"><span>Pending (4)</span></li>
                <li rel="tab2"><span>Approved</span></li>
                <li rel="tab3"><span>Rejected</span></li>
            </ul>
        </div>
        <div class="tab_container">
            <div id="tab1" class="tab_content">
                <div class="todo-all-tab">
                    <ul>
                        <li class="width-20 table-label">Name</li>
                        <li class="width-20 table-label">Email</li>
                        <li class="width-20 table-label">Business type</li>
                        <li class="width-20 table-label">Date submitted</li>
                    </ul>
                    <ul>
                        <li class="width-20"><a href="/partners/1" class="table-content-bold">Alex Sanders</a></li>
                        <li class="width-20 table-content">aleksadnar@gmail.com</li>
                        <li class="width-20 table-content">Villa</li>
                        <li class="width-20 table-content">September 30, 2022</li>
                    </ul>
                    <ul>
                        <li class="width-20"><a href="/partners/1" class="table-content-bold">Alex Jordan</a></li>
                        <li class="width-20 table-content">aleksajj@gmail.com</li>
                        <li class="width-20 table-content">Hotel</li>
                        <li class="width-20 table-content">September 30, 2022</li>
                    </ul>
                    <ul>
                        <li class="width-20"><a href="/partners/1" class="table-content-bold">Sarah Sanders</a></li>
                        <li class="width-20 table-content">saraadnar@gmail.com</li>
                        <li class="width-20 table-content">Transportation</li>
                        <li class="width-20 table-content">September 30, 2022</li>
                    </ul>
                    <ul>
                    <li class="width-20"><a href="/partners/1" class="table-content-bold">James Sanders</a></li>
                        <li class="width-20 table-content">jamesadnar@gmail.com</li>
                        <li class="width-20 table-content">DMC</li>
                        <li class="width-20 table-content">September 30, 2022</li>
                    </ul>
                </div>
            </div>
            <div id="tab2" class="tab_content">
                <div class="todo-all-tab">
                    <ul>
                        <li class="width-20 table-label">Name</li>
                        <li class="width-20 table-label">Email</li>
                        <li class="width-20 table-label">Business type</li>
                        <li class="width-20 table-label">Date submitted</li>
                    </ul>
                    <ul>
                        <li class="width-20 table-content-bold">Alex Sanders</li>
                        <li class="width-20 table-content">aleksadnar@gmail.com</li>
                        <li class="width-20 table-content">Villa</li>
                        <li class="width-20 table-content">September 30, 2022</li>
                    </ul>
                    <ul>
                        <li class="width-20 table-content-bold">Alex Jordan</li>
                        <li class="width-20 table-content">aleksajj@gmail.com</li>
                        <li class="width-20 table-content">Hotel</li>
                        <li class="width-20 table-content">September 30, 2022</li>
                    </ul>
                </div>
            </div>
            <div id="tab3" class="tab_content">
                <div class="todo-all-tab">
                    <ul>
                        <li class="width-20 table-content-bold">Sarah Sanders</li>
                        <li class="width-20 table-content">saraadnar@gmail.com</li>
                        <li class="width-20 table-content">Transportation</li>
                        <li class="width-20 table-content">September 30, 2022</li>
                    </ul>
                    <ul>
                        <li class="width-20 table-content-bold">James Sanders</li>
                        <li class="width-20 table-content">jamesadnar@gmail.com</li>
                        <li class="width-20 table-content">DMC</li>
                        <li class="width-20 table-content">September 30, 2022</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.10/js/intlTelInput.min.js"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-tagsinput.min.js') }}"></script>

<script>

</script>
@endpush
