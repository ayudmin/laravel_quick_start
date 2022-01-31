@extends('layouts.app')

@section('content')

    <div class="panel-body">

        <!-- display validation error -->

        @include('common.errors')

        <!-- new task form -->

        <form action="{{ url('task') }}" method='POST' class="form-horizontal">

            {{ csrf_field() }}
            <!-- task  -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name='name' id='task-name' class="form-con">
                </div>
            </div>
            <!-- add task button -->
            <div class="form-group">
                <div class="col-sm-offset-3 colsm-6">
                    <button class="btn btn-default">
                        <i class="fa fa-plus"></i>Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- todo current task -->

@endsection