{{-- Loop over every database --}}

@vite('resources/css/sidebar.css')
@vite('resources/js/sidebar.js')


@foreach ($databases as $database)
    <h1>{{ $database->Database }}</h1>
    @foreach ($database->tables as $table)
        @foreach($table as $key => $tableName)
            <p>{{ $tableName }}</p>
            <hr>
        @endforeach
    @endforeach

    <hr>
    <hr>
    <hr>
    <hr>
@endforeach


