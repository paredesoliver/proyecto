<div class="table-responsive-sm">
    <table class="table table-striped" id="usuarios-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuarios)
            <tr>
                <td>{{ $usuarios->nombre }}</td>
            <td>{{ $usuarios->email }}</td>
            <td>{{ $usuarios->email_verified_at }}</td>
            <td>{{ $usuarios->password }}</td>
            <td>{{ $usuarios->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['usuarios.destroy', $usuarios->id_nomi], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('usuarios.show', [$usuarios->id_nomi]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('usuarios.edit', [$usuarios->id_nomi]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

