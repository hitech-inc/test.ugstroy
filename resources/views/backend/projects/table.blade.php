<table class="table table-responsive" id="projects-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
        <th>Category</th>
        <th>Type</th>
        <th>Img</th>
        <th>Slug</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($projects as $project)
        <tr>
            <td>{!! $project->id !!}</td>
            <td>{!! $project->title !!}</td>
            <td>{!! $project->category !!}</td>
            <td>{!! $project->type !!}</td>
            <td>{!! $project->img !!}</td>
            <td>{!! $project->slug !!}</td>
            <td>
                {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('projects.show', [$project->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('projects.edit', [$project->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>