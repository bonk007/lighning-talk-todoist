<x-todoist::todoist>
    <div class="flex justify-between items-center mb-8">
        <h1>Created Todos</h1>
        <a href="{{ route('todos.create') }}">Create a new one</a>
    </div>

    <table class="w-full">
        <thead>
            <tr>
                <th>No</th>
                <th>Description</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($todos as $index => $todo)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $todo->description }}</td>
                <td>{{ $todo->getAttribute('created_at')->format('d/M/Y H:i:s') }}</td>
                <td>
                    <div class="flex justify-center items-center gap-4">
                        <a href="{{ route('todos.edit', compact('todo')) }}">Edit</a>
                        <a href="{{ route('todos.destroy', compact('todo')) }}">Edit</a>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center">No record</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</x-todoist::todoist>
