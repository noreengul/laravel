@extends('layouts.main')

@section('content')
    <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Send Design Request </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <form   method="POST" action="{{ route('design-request') }}"  role="form">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                        <p class="help-block error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                        <p class="help-block error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" rows="3"  name="message"  value="{{ old('message') }}" >{{ old('message') }}</textarea>
                                        @error('message')
                                        <p class="help-block error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit Button</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

