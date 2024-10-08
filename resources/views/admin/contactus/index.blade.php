@extends('admin.layout.master')

@section('title', 'ContactUs')

@section('body')

    <!-- Main -->
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        Contact Us
                        <div class="page-title-subheading">
                            View, delete and manage.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">

                    <div class="card-header">

                        <form>
                            <div class="input-group">
                                <input type="search" name="search" id="search" placeholder="Search everything"
                                    class="form-control">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-search"></i>&nbsp;
                                        Search
                                    </button>
                                </span>
                            </div>
                        </form>

                        <div class="btn-actions-pane-right">
                            <div role="group" class="btn-group-sm btn-group">

                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th>Full Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Subject</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                {{-- @foreach ($contacts as $contact)
                                    <tr>
                                        <td class="text-center text-muted">#{{ $contact->id }}</td>

                                        <td class="text-center">{{ $contact->yourName }}</td>
                                        <td class="text-center">{{ $contact->yourEmail }}</td>
                                        <td class="text-center">{{ $contact->Subject }}</td>
                                        <td class="text-center">{{ $contact->Message }}</td>
                                        </td>
                                        <td class="text-center">
                                            <a href="./admin/contactus/{{ $contact->id }}"
                                                class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                                Details
                                            </a>
                                            <form class="d-inline" action="./admin/contactus/{{ $contact->id }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-hover-shine btn-outline-danger border-0 btn-sm"
                                                    type="submit" data-toggle="tooltip" title="Delete"
                                                    data-placement="bottom"
                                                    onclick="return confirm('Do you really want to delete this item?')">
                                                    <span class="btn-icon-wrapper opacity-8">
                                                        <i class="fa fa-trash fa-w-20"></i>
                                                    </span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach --}}


                            </tbody>
                        </table>
                    </div>

                    <div class="d-block card-footer">
                        {{-- {{ $contacts->links() }} --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->


@endsection
