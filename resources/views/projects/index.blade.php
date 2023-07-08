<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>projects</h1>
    <a href="{{ route('project.create') }}" class="btn btn-success-mt-5">Create new </a>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Old Url</th>
                <th>New Url</th>
                <th>Description</th>
            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->old_url }}</td>
                    <td><a href="{{ route('project.show', $project->new_url) }}"> {{ $project->new_url }}</a></td>
                    <td>{{ $project->description }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
