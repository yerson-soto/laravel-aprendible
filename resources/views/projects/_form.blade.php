@csrf
<div class="form-group">
    <label for="title">{{ __('Title') }}</label>
    <input
        type="text"
        name="title"
        id="title"
        value="{{ old('title', $project->title) }}"
        class="form-control shadow-sm bg-light"
    >
</div>
<div class="form-group">
    <label for="description">{{ __('Description') }}</label>
    <textarea
        name="description"
        id="description"
        class="form-control shadow-sm bg-light"
    >{{ old('description', $project->description) }}</textarea>
</div>
<div class="form-group">
    <label for="slug">{{ __('Project URL') }}</label>
    <input
        type="text"
        name="slug" id="slug"
        value="{{ old('slug', $project->slug) }}"
        class="form-control shadow-sm bg-light"
    >
</div>

<input
    type="submit"
    value="{{ __($btnText) }}"
    class="btn btn-primary btn-block"
>

