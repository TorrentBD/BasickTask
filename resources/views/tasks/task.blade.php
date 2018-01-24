@extends('layouts.master')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('partials.error')  
        
		        <!-- New Task Form -->
		        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
		            {{ csrf_field() }}

		            <!-- Task Name -->
		         
		            <div>
		                <label for="task">Task</label>
		            </div>
		          
		            <div class="form-group">
		                <input type="text" name="name" id="task-name" class="form-control">  
		            </div>

		            <div>
		            	<label for="task">Task Description</label>
		            </div>

		            <div class="form-group">            	
		                 <textarea name="dname" id="task-d" class="form-control"></textarea>
		            </div>             
		            
		            <button type="submit" class="btn btn-default">
		                <i class="fa fa-plus"></i> Add Task</button>
		        </form>             
    </div>

    <!-- TODO: Current Tasks -->

    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                

                                <td>
                                    <tr>
									    <!-- Task Name -->
									    <td class="table-text">
									        <div>{{ $task->name }}</div>
									    </td>

									    <!-- Delete Button -->
									    <td>
									        <form action="{{ url('task/'.$task->id) }}" method="POST">
									            {{ csrf_field() }}
									            {{ method_field('DELETE') }}

									            <button type="submit" class="btn btn-danger">
									                <i class="fa fa-trash"></i> Delete
									            </button>
									        </form>
									    </td>
									</tr>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection