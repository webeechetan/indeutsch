@extends('admin.layouts.app')

@section('title', 'Contact')

@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Contact List</h5>
  </div>
          
    <div class="table-responsive text-nowrap">
        <div class="container">
            <table class="table" id="datatable-category">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Category</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->first_name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->category }}</td>
                            <td style="word-wrap: break-word; overflow-wrap: break-word; max-width: 250px;">
                                {{ $contact->message }}
                            </td>
                            <td>         
                                <form action="{{ route('contact.destroy', $contact->id ) }}" method="POST" onsubmit="return confirmDelete()">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn rounded-pill btn-icon btn-danger btn-sm">
                                      <span class="tf-icons bx bx-trash "></span>
                                  </button>
                                </form>
                              </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination links -->
            {!! $contacts->links() !!}

        </div>
    </div>

</div>
@endsection

<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this item?');
    }
</script>
