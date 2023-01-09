@extends('pages.layouts.app')

@section('content')
<div class="dashboard-details dashboard-header padding-spacing">
    <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
        <h1>To-do</h1>
        <ul class="d-flex flex-wrap justify-content-flex-end m-600">
            <li>
                <a href="#add-new-task" data-fancybox>Add Task</a>
                <div class="edit-popup fancybox-content add-new-task" id="add-new-task" style="display: none;">
                    <div class="title-wrap">
                        <h1>Add new task</h1>
                    </div>
                    <br>
                    <div class="add-client-form">
                        <form id="addnewTodoForm" method="POST" action="{{route('addtoDo')}}">
                            @csrf
                            <ul>
                                <li class="width-100">
                                    <label for="uname"><b>Task name</b></label>
                                    <input type="text" placeholder="Enter name" name="name">
                                </li>
                                <li class="width-100">
                                    <label for="uname"><b>Deadline</b></label>
                                    <input type="date" name="deadline" placeholder="Set deadline">
                                </li>
                                <li class="width-100">
                                    <label for="uname"><b>Enter task details</b></label>
                                    <textarea name="details" placeholder="Enter detail here..."
                                        style="height:70%"></textarea>
                                </li>
                                <li class="frequency-section width-100">
                                    <label for="uname"><b>Remind me on...</b></label>
                                    <select class="form-select" name="task_remind_interval_id">
                                        @foreach($taskIntervals as $intervals)
                                        <option value="{{$intervals->id}}">{{ $intervals->description }}</option>
                                        @endforeach
                                    </select>
                                </li>
                                <li class="frequency-section width-100">
                                    <label for="uname"><b>Status</b></label>
                                    <select class="form-select" name="todo_status_id">
                                        @foreach($todoStatuses as $status)
                                        <option value="{{$status->id}}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
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
        <div class="clients-tab d-flex flex-wrap justify-content-space-between">
            <ul class="tabs to-do-tab d-flex flex-wrap">
                <li class="active" rel="tab1"><span>All</span></li>
                <li rel="tab2"><span>Open</span></li>
                <li rel="tab3"><span>Completed</span></li>
            </ul>
        </div>
        <div class="tab_container">
            <div id="tab1" class="tab_content">
                <div class="todo-all-tab">
                    @if(count($todos)>0)
                    @foreach($todos as $todo)
                    <ul>
                        <li class="check-box">
                            <div class="form-group">
                                <input type="checkbox" onchange="changeTaskStatus(this,'{{$todo->id}}')"
                                    id="checkbox{{$todo->id}}" @if($todo->todo_status_id == 2)
                                checked=checked
                                @endif>
                                <label for="checkbox{{$todo->id}}"></label>
                            </div>
                        </li>
                        <li class="information">
                            <div class="content">
                                <h4>{{$todo->name}}</h4>
                                <p>{{$todo->details}}
                                </p>
                            </div>
                        </li>
                        <li class="user-img-wrap">
                            <div class="user-img">
                                @if(auth()->user()->image_url)
                                <img src="{{auth()->user()->image_url}}">
                                @else
                                <img src="{{ asset('assets/images/Avatar-Profile-Vector-PNG.png') }}">
                                @endif
                            </div>
                            <h6>{{auth()->user() ? auth()->user()->name : ''}}</h6>
                        </li>
                        <li class="due-date">Due {{convertDateFormatMYD($todo->deadline)}}</li>
                    </ul>
                    @endforeach
                    @else
                    <div class="d-flex justify-content-center" style="margin-top:30px">
                        <h5 class="mt-4 grey-color">No data found</h5>
                    </div>
                    @endif
                </div>
            </div>
            <div id="tab2" class="tab_content">
                <div class="todo-all-tab">
                    @if(count($opentodos)>0)
                    @foreach($opentodos as $todo)
                    <ul>
                        <li class="check-box">
                            <div class="form-group">
                                <input type="checkbox" onchange="changeTaskStatus(this,'{{$todo->id}}')"
                                    id="checkbox{{$todo->id}}" @if($todo->todo_status_id == 2)
                                checked=checked
                                @endif>
                                <label for="checkbox{{$todo->id}}"></label>
                            </div>
                        </li>
                        <li class="information">
                            <div class="content">
                                <h4>{{$todo->name}}</h4>
                                <p>{{$todo->details}}
                                </p>
                            </div>
                        </li>
                        <li class="user-img-wrap">
                            <div class="user-img">
                                @if(auth()->user()->image_url)
                                <img src="{{auth()->user()->image_url}}">
                                @else
                                <img src="{{ asset('assets/images/Avatar-Profile-Vector-PNG.png') }}">
                                @endif
                            </div>
                            <h6>{{auth()->user() ? auth()->user()->name : ''}}</h6>
                        </li>
                        <li class="due-date">Due {{convertDateFormatMYD($todo->deadline)}}</li>
                    </ul>
                    @endforeach
                    @else
                    <div class="d-flex justify-content-center" style="margin-top:30px">
                        <h5 class="grey-color">No data found</h5>
                    </div>
                    @endif
                </div>
            </div>
            <div id="tab3" class="tab_content">
                <div class="todo-all-tab">
                    @if(count($completedtodos)>0)
                    @foreach($completedtodos as $todo)
                    <ul>
                        <li class="check-box">
                            <div class="form-group">
                                <input type="checkbox" onchange="changeTaskStatus(this,'{{$todo->id}}')"
                                    id="checkbox{{$todo->id}}" @if($todo->todo_status_id == 2)
                                checked=checked
                                @endif>
                                <label for="checkbox{{$todo->id}}"></label>
                            </div>
                        </li>
                        <li class="information">
                            <div class="content">
                                <h4>{{$todo->name}}</h4>
                                <p>{{$todo->details}}
                                </p>
                            </div>
                        </li>
                        <li class="user-img-wrap">
                            <div class="user-img">
                                @if(auth()->user()->image_url)
                                <img src="{{auth()->user()->image_url}}">
                                @else
                                <img src="{{ asset('assets/images/Avatar-Profile-Vector-PNG.png') }}">
                                @endif
                            </div>
                            <h6>{{auth()->user() ? auth()->user()->name : ''}}</h6>
                        </li>
                        <li class="due-date">Due {{convertDateFormatMYD($todo->deadline)}}</li>
                    </ul>
                    @endforeach
                    @else
                    <div class="d-flex justify-content-center" style="margin-top:30px">
                        <h5 class="grey-color">No data found</h5>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

<!-- <script src="{{ asset('assets/js/intlTelInput.min.js') }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.10/js/intlTelInput.min.js"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-tagsinput.min.js') }}"></script>

<script>
jQuery(document).ready(function($) {
    if ($("#addnewTodoForm").length > 0) {
        // Suppose that your method is well defined
        $("#addnewTodoForm").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 250
                },
                deadline: {
                    required: true,
                    date: true,
                    maxlength: 250
                },
                remindon: {
                    required: false,

                },
                details: {
                    required: false,
                    maxlength: 500
                },
                status: {
                    required: true
                },
            },
            messages: {
                name: {
                    required: "Please enter task name",
                },
                deadline: {
                    required: "Please enter deadline",
                }
            },
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass); //prevent class to be added to selects
            },
            errorPlacement: function(error, element) {
                // if (element.attr("name") == "client_dobM") {
                //     error.insertAfter("#main-information .month .select2");
                // }else {
                //     error.insertAfter(element);
                // }
                error.insertAfter(element);
            },
            submitHandler: function(form) {
                form.submit();
            }
        })
    }
});

function changeTaskStatus(checkboxElem, id) {
    console.log(id)
    if (checkboxElem.checked) {
        changeTodoStatusRequest(id, 2)
    } else {
        changeTodoStatusRequest(id, 1)
    }
}

function changeTodoStatusRequest(id = 0, status = 0) {
    $.ajax({
        url: "{{ url('change-todo-status') }}" + '/' + id + '/' + status,
        data: {
            _token: '{{ csrf_token() }}',
        },
        type: 'POST',
        success: function(response) {
            console.log(response);
            if (response.status) {
                toastr.success(response.msg)
                setTimeout(() => {
                    location.reload();
                }, 500);
            } else {
                toastr.error(response.msg)
                if (status == 2) {
                    document.getElementById("checkbox" + id).checked = false;
                } else {
                    document.getElementById("checkbox" + id).checked = true;
                }
            }
        }
    })
}
</script>
@endpush
