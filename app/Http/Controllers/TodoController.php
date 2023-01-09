<?php

namespace App\Http\Controllers;

use App\ModelsExtended\TaskRemindInterval;
use App\Notifications\TaskReminderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\ModelsExtended\Todo;
use App\ModelsExtended\TodoStatus;
use App\Http\Requests\AddNewTaskRequest;

class TodoController extends Controller
{
    public function toDo()
    {
        $todos = Todo::myTodos()->get();
        $todoStatuses = TodoStatus::TodoStatus()->get();
        $taskIntervals = TaskRemindInterval::TaskIntervals()->get();
        $opentodos = [];
        $completedtodos = [];
        foreach ($todos as $value) {
            if ($value['todo_status_id'] == 1) {
                $opentodos[] = $value;
            } else {
                $completedtodos[] = $value;
            }
        }

        return view('pages.to_do', compact('todos', 'opentodos', 'completedtodos', 'todoStatuses', 'taskIntervals'));
    }

    public function addTodo(AddNewTaskRequest $request)
    {

        try {
            $todo = new Todo();
            $todo->name = $request->input('name');
            $todo->deadline = $request->input('deadline');
            $todo->details = $request->input('details');
            $todo->task_remind_interval_id = $request->input('task_remind_interval_id');
            $todo->todo_status_id = $request->input('todo_status_id');
            $todo->created_by_id = auth()->id();
            $todo->save();

            toastr()->success('Data has been saved successfully!');
            return redirect()->back();

        } catch (\Exception $e) {
//            return $e->getMessage();
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        } catch (\Throwable $e) {
            // return $e;
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();
        }
    }

    public function changeTodoStatus($id, $status)
    {
        try {
            $todo = Todo::myTodos()->findOrFail($id);
            $todo->todo_status_id = $status;
            $todo->save();
            return response()->json(['status' => true, 'msg' => 'Data has been updated successfully!']);

        } catch (\Exception $e) {

            // something went wrong
            return response()->json(['status' => false, 'msg' => 'An error has occurred please try again later.']);
        } catch (\Throwable $e) {
            // return $e;
            // something went wrong
            return response()->json(['status' => false, 'msg' => 'An error has occurred please try again later.']);
        }
    }

}
