@extends('pages.layouts.app')

@section('content')
    <div class="dashboard-details dashboard-header padding-spacing">
        <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
            <h1>Company Communications</h1>
            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                <li>
                    <a href="#company-communications" data-fancybox id="add_company_communication">Add Company Communication</a>
                    <div class="edit-popup fancybox-content company-communications" id="company-communications" style="display: none;">
                        <div class="title-wrap">
                            <h1>Company Communications</h1>
                        </div>
                        <br>
                        <div class="add-client-form">
                            <form id="comCommunForm" method="POST" action="{{ route('companyCommunications.store') }}">
                                <input type="hidden" name="id" id="comp_commu_id" value="">
                                @csrf
                                <ul>
                                    <li class="width-100">
                                        <label for="title" class="required"><b>Title</b></label>
                                        <input type="text" placeholder="Title" id="title" name="title">
                                    </li>
                                    <li class="width-100">
                                        <label for="description" class="required"><b>Description</b></label>
                                        <textarea placeholder="Description" name="description" id="description" style="height:174px;"></textarea>
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
                            <li class="width-30 table-label">Title</li>
                            <li class="width-30 table-label">Action</li>
                        </ul>
                        @if ($companyCommunications->count() > 0)
                            @foreach ($companyCommunications as $compCommun)
                                <ul>
                                    <li class="width-30">{{ $compCommun->id }}</li>
                                    <li class="width-30">{{ $compCommun->title ?? '' }}</li>
                                    <li class="width-30"><a class="edit_companyCommunications" href="#company-communications"
                                            data-fancybox id="add_faq"
                                            data-url="{{ route('companyCommunications.edit', $compCommun->id) }}">edit</a>
                                        <a href="javascript:void(0)"
                                            url="{{ route('companyCommunications.delete', $compCommun->id) }}"
                                            class="delete-item">delete</a></li>
                                </ul>
                            @endforeach
                        @else
                            <ul>
                                <li class="trip-details-wrap d-flex flex-wrap justify-content-center col-12">
                                    No Communication Found Yet!
                                </li>
                            </ul>
                        @endif
                        {!! $companyCommunications->links() !!}
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
        jQuery(document).ready(function($) {
            $("#comCommunForm").validate({
                rules: {
                    title: {
                        required: true,
                    },
                    description: {
                        required: true,
                    },
                },
                messages: {
                    title: {
                        required: "Please enter title",
                    },
                    description: {
                        required: "Please enter description",
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

            $(".edit_companyCommunications").on("click", function() {
                var url = $(this).attr('data-url');
                console.log(url);
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(response) {
                        $('#comp_commu_id').val(response.compCommun.id);
                        $("#title").val(response.compCommun.title);
                        $("#description").val(response.compCommun.description);
                    }
                });
            });

            $("#add_company_communication").on("click", function() {
                $(".error").remove();
                $('#comp_commu_id').val('');
                $("#description").val('');
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
                    })

                }
            });
        });
    </script>
@endpush
