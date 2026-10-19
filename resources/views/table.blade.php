<!-- Students Table -->
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>ID</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($students as $name => $id)
            <tr>
                <td>{{ $name }}</td>
                <td>{{ $id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
```