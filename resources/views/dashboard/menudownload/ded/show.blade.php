@extends('layouts.admin_template')
@section('title', 'DED')
@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-11">


            <a href="{{ route('ded.index') }}" class="btn btn-success btn-sm mt-5"> <i
                    class="bi bi-arrow-left"></i>
                Back to
                my post</a>


            <article>
                {!! $ded->body !!}
            </article>

            <embed class="embed-responsive-item mt-3" async='async'
                src="{{ asset('storage/' . $ded->filedata) }}" width="100%" height="500px"></embed>
        </div>
    </div>
</div>
@endsection
