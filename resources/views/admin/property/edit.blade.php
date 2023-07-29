@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Edit Property</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="{{route('property.update' , $property->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="property" class="form-label">Property</label>
                                <input class="form-control" id="property" name="property"
                                    value="{{ old('property', $property->property) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" required>{{ old('description', $property->description) }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input class="form-control" id="address" name="address"
                                    value="{{ old('address', $property->address) }}" required>
                            </div>
                            <br>
                            {{-- <div class="form-group">
                                <label for="developer_id" class="form-label">Developer</label>
                                <select class="form-control" id="developer_id" name="developer_id">
                                    @foreach ($developer as $developer)
                                        @if (old('developer_id', $property->developer_id == $developer->id))
                                            <option name="developer_id" value="{{ $developer->id }}" selected>
                                                {{ $developer->company }}
                                            </option>
                                        @endif
                                        <option name="developer_id" value="{{ $developer->id }}">{{ $developer->company }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br> --}}
                            @foreach ($developer as $developer)
                            <input type="hidden" name="developer_id" value="{{ $developer->id }}">
                            @endforeach
                            <div class="form-group">
                                <label for="type_id" class="form-label">Type</label>
                                <select class="form-control" id="type_id" name="type_id">
                                    @foreach ($type as $type)
                                        @if (old('type_id', $property->type_id == $type->id))
                                            <option name="type_id" value="{{ $type->id }}" selected>
                                                {{ $type->name }}
                                            </option>
                                        @endif
                                        <option name="type_id" value="{{ $type->id }}">{{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            {{-- <div class="form-group">
                                <label for="agent_id" class="form-label">Agent</label>
                                <select class="form-control" id="agent_id" name="agent_id">
                                    @foreach ($agent as $agent)
                                        @if (old('agent_id', $property->agent_id == $agent->id))
                                            <option name="agent_id" value="{{ $agent->id }}" selected>
                                                {{ $agent->name }}
                                            </option>
                                        @endif
                                        <option name="agent_id" value="{{ $agent->id }}">{{ $agent->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br> --}}
                            <div class="float-end">
                                <a type="button" class="btn btn-warning"
                                    href="{{ route('property.show', $property->id) }}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
