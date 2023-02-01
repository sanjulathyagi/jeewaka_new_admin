<table >
    <thead>
        <tr>
            <th>Reason</th>
            <th>Amount</th>
            <th>Remark</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($expenses as $expense)
            <tr>
                <td>{{ $expense->type?$expense->type->name:'N/A' }}</td>
                <td>
                   {{ $expense->amount }}
                </td>
                <td>
                    {{ !!$expense->remark }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
