<table class="table table-light table-striped table-hover table-bordered text-center">
    <thead>
        <tr>
            <th class="table-dark text-center">NO</th>
            <th class="table-dark text-center">Date</th>
            <th class="table-dark text-center">EMAIL</th>
            <th class="table-dark text-center">EMAIL SUBJECT</th>
            <th class="table-dark text-center">DETAIL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($messages as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->email_subject }}</td>
                <td>
                    <!-- Tombol Check -->
                    <a href="#" class="btn apakau text-dark" data-bs-toggle="modal"
                        data-bs-target="#contactModal{{ $data->id }}">
                        Check
                    </a>

                    <!-- Modal untuk Pesan Ini -->
                    @include('admin.components.detail-message')
                </td>
            </tr>
        @endforeach
    </tbody>
</table>