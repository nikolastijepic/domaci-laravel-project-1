@extends('layout-admin')

@section('pageTitle')
    Contacts - Admin
@endsection

@section('pageContent')

    <div class="container mt-4">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allContacts as $contact)
                <tr>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td class="d-flex align-items-center gap-2">
                        <a class="btn btn-primary" href="{{ route('admin.contact.edit', ['contact' => $contact->id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('admin.contact.delete', ['contact' => $contact->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
