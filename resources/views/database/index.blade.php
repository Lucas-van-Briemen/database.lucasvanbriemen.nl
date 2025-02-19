{{-- Loop over every database --}}

@vite("resources/css/sidebar.css")

<div class="sidebar">
    @foreach ($databases as $database)
        <div class="database-container" data-database="{{ $database->Database }}">
            <p class="database">{{ $database->Database }}</p>
            <div class="table-container">
                @foreach ($database->tables as $table)
                    @foreach($table as $key => $tableName)
                        <p class="table-name">{{ $tableName }}</p>
                    @endforeach
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@vite("resources/js/sidebar.js")
