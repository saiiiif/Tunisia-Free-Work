@extends('layouts.master')

@section('content')


<h1>Créer un nouveau message</h1>

    <form action="{{ route('messages.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-6">
            <!-- Subject Form Input -->
            <div class="form-group">
                <label class="control-label">sujet</label>
                <input type="text" class="form-control" name="subject" placeholder="Subject"
                       value="{{ old('subject') }}">
            </div>

            <!-- Message Form Input -->
            <div class="form-group">
                <label class="control-label">Message</label>
                <textarea name="message" class="form-control">{{ old('message') }}</textarea>
            </div> 
            @if($membres->count() > 0)
                <div class="checkbox">
                    @foreach($membres as $membre)
                        <label title="{{ $membre->name }}"><input type="checkbox" name="recipients[]"
                                                                value="{{ $membre-> id}}">{!!$membre->name!!}</label>
                    @endforeach
                </div>
            @endif
    
            <!-- Submit Form Input -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">envoyer</button>
            </div>
        </div>
    </form>
    @stop