<table class="table table-responsive" id="contacts-table">
    <thead>
        <tr>
            <th>Longitude</th>
        <th>Latitude</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <td>{!! $contact->longitude !!}</td>
            <td>{!! $contact->latitude !!}</td>
            <td>{!! $contact->address !!}</td>
            <td>{!! $contact->phone !!}</td>
            <td>{!! $contact->email !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.contacts.destroy', $contact->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.contacts.show', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.contacts.edit', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>