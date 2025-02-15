{{-- Loop over every database --}}
@foreach ($databases as $database)
    <h1>{{ $database->Database }}</h1>
    @foreach ($database->tables as $table)
                    @php
                        $tableKey = "Tables_in_database.{$database->Database}";
                    @endphp
        <h2>{{ $table->$tableKey }}</h2>

    @endforeach

    <hr>
    <hr>
    <hr>
    <hr>
@endforeach


