@foreach ($projects as $project)
    <div class="col-12 col-md-6 col-lg-3 g-5">
        <div class="card h-100">
            <div class="card-header p-0 d-flex justify-content-center">
                <img class="w-100 rounded-t m-0 object-cover" src="{{ $project->image }}" alt="{{ $project->name }}">
            </div>

            <div class="card-body text-center">
                <h5>{{ $project->name }}</h5>
            </div>
            <div class="card-footer text-center">
                <div class="pb-2">
                    <small>{{ strtolower($project->stack) }}</small>
                </div>
                <div class="d-flex flex-column gap-2">
                    <a target="_blank" href="{{ $project->link }}"><button
                            class="btn btn-primary w-100">Link</button></a>
                    <a href="{{ route('admin.projects.show', $project) }}"><button class="btn btn-primary w-100">Show
                            Details</button></a>
                </div>
            </div>
        </div>
    </div>
@endforeach
