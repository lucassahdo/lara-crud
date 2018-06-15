@extends('layout.base')

@section('content')

<section id="crud-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Clients Table</h2>
            <p class="section-subtitle text-center wow fadeInDown">
                Create - Read - Update - Delete
            </p>
        </div>

        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <button type="button" class="btn btn-primary" id="btn-add">Add</button>
                </div>

                <div class="panel-body">
                    <!-- <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Clients" /> -->

                    <table class="table table-hover" id="dev-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($clients as $key => $client):

                            @php 
                                $n = $key + 1; 
                            @endphp

                            <tr id="client{{ $client->id }}" data-id="{{ $n }}">                                
                                <td>{{ $n }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->address }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->email }}</td>
                                <td>
                                    <button type="button " class="btn btn-success btn-edit" style="margin-right:10px; width:100%;">Edit</button>
                                </td>
                                <td>
                                    <button type="button " class="btn btn-danger btn-delete" style="width:100%">Delete</button>
                                </td>
                            </tr>

                            @endforeach;
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
</section>

@endsection

@include('inc.newClient')
@include('inc.editClient')