<x-app-layout>

    <x-slot name="header">

        <section class="section">

            <div class="section-body">

                <div class="row">

                    <div class="col-12">

                        @include('includes.messages')

                        <div class="card">

                            {{-- Header --}}
                            <div class="card-header">
                                <h4>Create Listing</h4>
                            </div>

                            <form action="{{ route('admin.listings.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="card-body">

                                    {{-- Title --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="title" type="text" class="form-control" value="{{ old('title') }}">
                                        </div>
                                    </div>

                                    {{-- Location --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Location</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="location" type="text" class="form-control" value="{{ old('location') }}">
                                        </div>
                                    </div>

                                    {{-- Name --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                                        </div>
                                    </div>

                                    {{-- Guide Price --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Guide Price</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="guide_price" type="text" class="form-control" value="{{ old('guide_price') }}">
                                        </div>
                                    </div>

                                    {{-- Key Count --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Key Count</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="key_count" type="text" class="form-control" value="{{ old('key_count') }}">
                                        </div>
                                    </div>

                                    {{-- Opportunity --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Opportunity</label>
                                        <div class="col-sm-12 col-md-7">
                                            {{-- The "form-control" class disables the 'rows' attribute from TextArea. It also disables vertical resizing. Manually adding styles. --}}
                                            <textarea name="opportunity" rows="5" style="border-radius: 0.25rem; color: #495057; background-color: #fdfdff; border-color: #e4e6fc; width: 100%; resize: vertical;">{{ old('opportunity') }}</textarea>
                                        </div>
                                    </div>

                                    {{-- Image --}}
{{-- 

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="cover_image" id="image-upload" value="{{ old('cover_image') }}">
                                            </div>
                                        </div>
                                    </div>
 --}}
                                    {{-- Image Title --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image Title</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="cover_image_title" type="text" class="form-control" value="{{ old('cover_image_title') }}">
                                        </div>
                                    </div>

                                    {{-- Current Owner --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Current Owner</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="current_owner" type="text" class="form-control" value="{{ old('current_owner') }}">
                                        </div>
                                    </div>

                                    {{-- Flag Management --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Flag Management</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="flag_management" type="text" class="form-control" value="{{ old('flag_management') }}">
                                        </div>
                                    </div>

                                    {{-- Financials --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Financials</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="financials" type="text" class="form-control" value="{{ old('financials') }}">
                                        </div>
                                    </div>

                                    {{-- Tenure --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tenure</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="tenure" type="text" class="form-control" value="{{ old('tenure') }}">
                                        </div>
                                    </div>

                                    {{-- Date Posted --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Posted</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="date_posted" type="date" class="form-control" value="{{ old('date_posted') }}">
                                        </div>
                                    </div>

                                    {{-- Comment --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Comment</label>
                                        <div class="col-sm-12 col-md-7">
                                            {{-- The "form-control" class disables the 'rows' attribute from TextArea. It also disables vertical resizing. Manually adding styles. --}}
                                            <textarea name="comment" rows="5" style="border-radius: 0.25rem; color: #495057; background-color: #fdfdff; border-color: #e4e6fc; width: 100%; resize: vertical;">{{ old('comment') }}</textarea>
                                        </div>
                                    </div>

                                    {{-- Submit Button --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary">Create Listing</button>
                                        </div>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </x-slot>

</x-app-layout>
