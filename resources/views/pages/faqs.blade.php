@extends('pages.layouts.app')

@section('content')
    <div class="dashboard-details dashboard-header padding-spacing">
        <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
            <h1>FAQs</h1>
            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                <li>
                    <a href="#faqs-section" data-fancybox id="add_faq">Add FAQ</a>
                    <div class="edit-popup fancybox-content faqs-section" id="faqs-section" style="display: none;">
                        <div class="title-wrap">
                            <h1>FAQs</h1>
                        </div>
                        <br>
                        <div class="add-client-form">
                            <form id="faqForm" method="POST" action="{{ route('faqs.store') }}">
                                <input type="hidden" name="id" id="faq_id" value="">
                                @csrf
                                <ul>
                                    <li class="width-100">
                                        <label for="question" class="required"><b>Question</b></label>
                                        <input type="text" placeholder="Question" id="question" name="question">
                                    </li>
                                    <li class="width-100">
                                        <label for="answer" class="required"><b>Answer</b></label>
                                        <textarea placeholder="Answer" name="answer" id="answer" style="height:174px;"></textarea>
                                    </li>
                                </ul>
                                <div class="form-btn">
                                    <button type="button" class="fancybox-close-button" data-fancybox-close>Cancel</button>
                                    <input type="submit" value="Save changes">
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clients-tab-section">
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                    <div class="todo-all-tab">
                        <ul>
                            <li class="width-30 table-label">ID</li>
                            <li class="width-30 table-label">Question</li>
                            <li class="width-20 table-label">Action</li>
                        </ul>
                        @if ($faqs->count() > 0)
                            @foreach ($faqs as $faq)
                                <ul>
                                    <li class="width-30">{{ $faq->id }}</li>
                                    <li class="width-30">{{ $faq->question ?? '' }}</li>
                                    <li class="width-20"><a class="edit_faq" href="#faqs-section"
                                            data-url="{{ route('faqs.edit', $faq->id) }}" data-fancybox>edit</a> <a
                                            href="javascript:void(0)" url="{{ route('faqs.delete', $faq->id) }}"
                                            class="delete-item">delete</a></li>
                                </ul>
                            @endforeach
                        @else
                            <ul>
                                <li class="trip-details-wrap d-flex flex-wrap justify-content-center col-12">
                                    No FAQs Found Yet!
                                </li>
                            </ul>
                        @endif
                        {!! $faqs->links() !!}
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
        $(document).ready(function($) {
            $("#faqForm").validate({
                rules: {
                    question: {
                        required: true,
                    },
                    answer: {
                        required: true,
                    },
                },
                messages: {
                    question: {
                        required: "Please enter question",
                    },
                    answer: {
                        required: "Please enter answer",
                    },
                },
                highlight: function(element, errorClass) {
                    $(element).removeClass(errorClass);
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
            $("#add_faq").on("click", function() {
                $(".error").remove();
                $('#faq_id').val('');
                $("#question").val('');
                $("#answer").val('');

            });
            $(document).on('click', '.edit_faq', function(){
                var url = $(this).attr('data-url');
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(response) {
                        $('#faq_id').val(response.faqs.id);
                        $("#question").val(response.faqs.question);
                        $("#answer").val(response.faqs.answer);
                    }
                });
            });
        });

        $('.delete-item').on('click', function(e) {
            e.preventDefault();
            var url = $(this).attr('url');
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete it?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'DELETE',
                        url: url,
                        success: function() {
                            window.location.reload();
                        }
                    });
                }
            });
        });
    </script>
@endpush
