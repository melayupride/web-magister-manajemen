@extends('layouts.admin_template')
@section('title', 'Contact & Social Media')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Settings /</span> Contact & Social Media
    </h4>

    <div class="card mb-4">
        <h5 class="card-header">
            @if($contactSocial)
                Edit Contact & Social Media
            @else
                Create Contact & Social Media
            @endif
        </h5>
        
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ $contactSocial ? route('contact-socials.update', $contactSocial) : route('contact-socials.store') }}" method="POST">
                @csrf
                @if($contactSocial)
                    @method('PUT')
                @endif

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="link_ig" class="form-label">Instagram URL</label>
                        <input type="url" class="form-control" id="link_ig" name="link_ig" 
                               value="{{ old('link_ig', $contactSocial->link_ig ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="link_fb" class="form-label">Facebook URL</label>
                        <input type="url" class="form-control" id="link_fb" name="link_fb" 
                               value="{{ old('link_fb', $contactSocial->link_fb ?? '') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="link_x" class="form-label">Twitter/X URL</label>
                        <input type="url" class="form-control" id="link_x" name="link_x" 
                               value="{{ old('link_x', $contactSocial->link_x ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="link_linkedin" class="form-label">LinkedIn URL</label>
                        <input type="url" class="form-control" id="link_linkedin" name="link_linkedin" 
                               value="{{ old('link_linkedin', $contactSocial->link_linkedin ?? '') }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3">{{ old('address', $contactSocial->address ?? '') }}</textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" 
                               value="{{ old('phone', $contactSocial->phone ?? '') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="fax" class="form-label">Fax</label>
                        <input type="text" class="form-control" id="fax" name="fax" 
                               value="{{ old('fax', $contactSocial->fax ?? '') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" 
                               value="{{ old('email', $contactSocial->email ?? '') }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="website" class="form-label">Website URL</label>
                    <input type="url" class="form-control" id="website" name="website" 
                           value="{{ old('website', $contactSocial->website ?? '') }}">
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary me-2">
                        {{ $contactSocial ? 'Update' : 'Save' }}
                    </button>
                    
                    @if($contactSocial)
                        <button type="button" class="btn btn-danger" onclick="confirmDelete()">
                            Delete
                        </button>
                    @endif
                </div>
            </form>

            @if($contactSocial)
                <form id="delete-form" action="{{ route('contact-socials.destroy', $contactSocial) }}" method="POST" class="d-none">
                    @csrf
                    @method('DELETE')
                </form>
            @endif
        </div>
    </div>
</div>

@if($contactSocial)
<script>
    function confirmDelete() {
        if (confirm('Are you sure you want to delete this contact & social media data?')) {
            document.getElementById('delete-form').submit();
        }
    }
</script>
@endif

@endsection