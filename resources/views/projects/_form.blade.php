@csrf
<label for="">
    Titulo del projecto <br>
    <input type="text" name="title" value="{{ old('title',$project->title) }}">
</label>
<br>
<label for="">
    URL del proyecto <br>
    <input type="text" name="url" value="{{ old('url',$project->url) }}">
</label>
<br>
<label for="">
    Descripcion <br>
    <textarea type="text" name="description">{{ old('description',$project->description) }}</textarea>
</label> 
<br>
<button>{{$btnText}}</button> 