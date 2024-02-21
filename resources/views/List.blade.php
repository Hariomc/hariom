<center>
    <h2>List of Product</h2>
    <table border="1">
        <tr>
            <th>#</th>
            <th>category name</th>
            <th>product</th>

        </tr>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member['id'] }}</td>
                    <td>{{ $member['category_name'] }}</td>
                    <td>{{ $member['product'] }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <span>{{ $members->links() }}</span>
    <style>
        .w-5 {
            display: none
        }
    </style>
</center>
