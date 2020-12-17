@extends('layouts.app')

@section('content')

    <form action="{{route('upload.uploadFile')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="custom-file">
            <input type="file" name="file" class="custom-file-input" id="chooseFile">
            <label class="custom-file-label" for="chooseFile">Select file</label>
        </div>


        <button type="submit" value="Загрузить">Загрузить</button>
    </form>

@endsection
