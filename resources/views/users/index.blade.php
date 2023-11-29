<x-layout>

    <x-slot:title>
        Users
    </x-slot>

    <div class="uk-card uk-card-default uk-card-small uk-card-body">

        <h3 class="uk-card-title">USERS PAGE</h3>

        <p data-uk-margin>
            <a href="{{ route('users.create') }}" class="uk-button uk-button-secondary">Create new user</a>
        </p>

        <table class="uk-table uk-table-small uk-table-striped uk-table-hover">
            <thead>
            <tr>
                <th class="uk-table-shrink"></th>
                <th class="uk-table-shrink"></th>
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        <a href="{{ route('users.edit', ['user' => $user->id]) }}">
                            <span data-uk-icon="file-edit" style="width: 20px"></span>
                        </a>
                    </td>
                    <td>
                        <form id="delete-user-{{ $user->id }}" action="{{ url('/users/'.$user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a onclick="confirmDelete({{ $user->id }}, '{{ $user->name }}')">
                                <span data-uk-icon="trash" style="width: 20px"></span>
                            </a>
                        </form>
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    <script type="text/javascript">
        function confirmDelete(id, name) {
            if (confirm('Вы уверены, что хотите удалить пользователя ' + name + '?')) {
                document.getElementById('delete-user-' + id).submit();
            }
        }
    </script>

</x-layout>
