@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="card">
                <div class="header">
                    <h4 class="title">Creating New Product</h4>
                    <p class="category">Fill in the fields to create a new product</p>
                </div>

                <div class="content">

                    @include('layout.partials.messages')

                    <form action="{{ route('product.store') }}" method="POST" autocomplete="off">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label>Client</label>
                            <select name="client_id" class="form-control">
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}" {{ $client->id == $client_id ? 'selected' : '' }}>{{ $client->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>Notes</label>
                            <textarea name="notes" cols="30" rows="10" class="form-control">{{ old('notes') }}</textarea>
                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Create Product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection