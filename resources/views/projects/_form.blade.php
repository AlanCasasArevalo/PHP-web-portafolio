@csrf

<div class="form-group">
    <label for="title">Titulo del proyecto</label>
    <input
        class="form-control bg-light shadow-sm border-0"
        id="title"
        type="text"
        name="title"
        value="{{ old('title', $project->title)}}">
</div>

<div class="form-group">
    <label for="url">URL del proyecto</label>
    <input
        class="form-control bg-light shadow-sm border-0"
        id="url"
        type="text"
        name="url"
        value="{{ old('url', $project->url) }}">
</div>

<div class="form-group">
    <label for="description">Description del proyecto</label>
    <textarea
        class="form-control bg-light shadow-sm border-0"
        id="description"
        type="text"
        name="description">
        {{ old('description', $project->description) }}</textarea>
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $buttonText ?? '' }}</button>
<a class="btn btn-link btn-block" href="{{route('projects.index')}}">Cancelar</a>


