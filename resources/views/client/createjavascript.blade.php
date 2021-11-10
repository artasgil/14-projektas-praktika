@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="addFields">
                        <button class="btn btn-primary" id="addFields">Add Fields </button>
                    </div>
                    <div class="card-header">{{ __('Create Clients') }}</div>
                        <div class="card-body">
                        <form method="POST" action="{{ route('client.storejavascript') }}" >
                            @csrf
                            <div class="dynamicFields">
                            @for ($i=0; $i<$clientsCount; $i++ )
                            <div class="form-group row">
                                <label for="client_name" class="col-md-4 col-form-label text-md-right">{{ __('Client name') }}</label>
                                <div class="col-md-6">
                                    <input id="client_name" type="text" class="form-control" name="client_name[]" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="client_surname" class="col-md-4 col-form-label text-md-right">{{ __('Client surname') }}</label>
                                <div class="col-md-6">
                                    <input id="client_surname" type="text" class="form-control" name="client_surname[]" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="client_description" class="col-md-4 col-form-label text-md-right">{{ __('Client description') }}</label>
                                <div class="col-md-6">
                                    <textarea  class="form-control"  cols="38" rows="5" name="client_description[]"> </textarea>
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger remove-product">-</button>
                            @endfor
                        </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#addFields").click(function() {
                console.log("veikia");
                $(".dynamicFields").append('<div class="product"><div class="form-group row"><label for="client_name" class="col-md-4 col-form-label text-md-right">{{ __("Client name") }}</label><div class="col-md-6"><input id="client_name" type="text" class="form-control" name="client_name[]" autofocus></div></div><div class="form-group row"><label for="client_surname" class="col-md-4 col-form-label text-md-right">{{ __("Client surname") }}</label><div class="col-md-6"><input id="client_surname" type="text" class="form-control" name="client_surname[]" autofocus></div></div><div class="form-group row"><label for="client_description" class="col-md-4 col-form-label text-md-right">{{ __("Client description") }}</label><div class="col-md-6"><textarea  class="form-control"  cols="38" rows="5" name="client_description[]"> </textarea></div></div><button type="button" class="btn btn-danger remove-product">-</button></div>')
            });
            $(document).on('click', '.remove-product', function() {
                $(this).parents('.product').remove();
            });
        })
    </script>

    @endsection
