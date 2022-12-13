@extends('layouts.app')

@section('content')
    
    <div class="ml-4">
        <h2>id: {{ $task->id }}のタスク編集ページ</h2>
    </div>
    
    <div class="flex justify-center">
       <form method="POST" action="{{ route('task.update', $task->id) }}" class="w-1/2">
            @csrf
            @method('PUT')
            
                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">タスク：</span>
                    </label>
                    <input type="text" name="content" value="{{ $task->content }}" class="input input-bordered w-full">
                </div>
                
            <buttton type="submit" class="btn btn-primary btn-outline">更新</buttton>    
        </form>
    </div>
@endsection